<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Authentication extends CI_Controller
{
    public function login()
    {
        $this->load->model("UsersModel");

        $email = $this->input->post("email");
        $password = md5($this->input->post("password"));

        $user = $this->UsersModel->fetchByEmailAndPassword($email, $password);

        if ($user) {
            $this->session->set_userdata("signedUser", $user);
            $this->session->set_flashdata("success", "successfully signed-in");

        } else {
            $this->session->set_flashdata("danger", "invalid user/password");

        }

        redirect("/");
    }

    public function logout()
    {
        $this->session->unset_userdata("signedUser");

        $this->session->set_flashdata("success", "successfully signed-out");
        redirect("/");
    }

}