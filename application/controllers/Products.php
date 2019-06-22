<?php


class Products extends CI_Controller
{
    public function index()
    {
        $products = [
            [
                "name" => "Ball",
                "description" => "Another ball",
                "price" => 300
            ],
            [
                "name" => "HD",
                "description" => "external HD",
                "price" => 400
            ]
        ];

        $data = ["products" => $products];

        $this->load->view("products/index.php", $data);
    }
}