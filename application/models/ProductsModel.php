<?php


class ProductsModel extends CI_Model
{
    public function fetchAllProducts() {
        return $this->db->get("product")->result_array();
    }

    public function save($product)
    {
        $this->db->insert("product", $product);
    }

    public function fetchById($id)
    {
        return $this->db->get_where("product", ["id" => $id])->row_array();
    }
}