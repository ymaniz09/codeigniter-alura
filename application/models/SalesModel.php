<?php


class SalesModel extends CI_Model
{
    public function save($user)
    {
        $this->db->insert("sales", $user);
    }
}