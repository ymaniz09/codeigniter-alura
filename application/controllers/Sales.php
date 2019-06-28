<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sales extends CI_Controller
{
    public function new()
    {
        $user = $this->session->userdata("signedUser");

        $time = strtotime($this->input->post("deliver_date"));
        if ($time) {
            $new_date = date('Y-m-d', $time);
            $sales = [
                "product_id" => $this->input->post("product_id"),
                "buyer_id" => $user["id"],
                "date" => $new_date
            ];


            $this->load->model("SalesModel");
            $this->SalesModel->save($sales);
            $this->session->set_flashdata("success","product ordered successfully");
            redirect("/");
        }


    }
}