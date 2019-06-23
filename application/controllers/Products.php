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
    }

}