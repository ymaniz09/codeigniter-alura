<?php


class UsersModel extends CI_Model
{
    public function save($user)
    {
        $this->db->insert("users", $user);
    }

    public function fetchByEmailAndPassword($email, $password) {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $user = $this->db->get("users")->row_array();

        return $user;
    }
}