<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Products extends CI_Controller
{
    public function index()
    {
        $this->load->model("ProductsModel");

        $products = $this->ProductsModel->fetchAllProducts();

        $data = ["products" => $products];

        $this->load->helper("currency");
        $this->load->view("products/index.php", $data);
    }

    public function form()
    {
        $this->load->view("products/form.php");
    }

    public function new()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("name", "name", "trim|required|min_length[5]");
        $this->form_validation->set_rules("description", "description",
            "trim|required|min_length(10)|callback_does_not_contain_best");
        $this->form_validation->set_rules("price", "price", "required");
        $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>" ,"</p>");

        if ($this->form_validation->run()) {
            $user = $this->session->userdata("signedUser");
            $product = [
                "name" => $this->input->post("name"),
                "description" => $this->input->post("description"),
                "price" => $this->input->post("price"),
                "users_id" => $user["id"]
            ];

            $this->load->model("ProductsModel");
            $this->ProductsModel->save($product);

            $this->session->set_flashdata("success", "successfully added");

            redirect("/");
        } else {
            $this->load->view("products/form.php");
        }

    }

    public function show($id)
    {
        $this->load->model("ProductsModel");
        $product = $this->ProductsModel->fetchById($id);

        $data =  ["product" => $product];

        $this->load->helper("typography");
        $this->load->view("products/show", $data);
    }

    public function does_not_contain_best($name)
    {
        $pos = strpos($name, "best");
        if ($pos != FALSE) {
            return TRUE;
        } else {
            $this->form_validation->set_message("does_not_contain_best", "This field should no contain best");
            return FALSE;
        }
    }
}