<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Controller
{
    public function new()
    {
        $user = [
            "name" => $this->input->post("name"),
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("password"))
        ];


        $this->load->model("UsersModel");
        $this->UsersModel->save($user);
        $this->load->view("users/new");
    }

}