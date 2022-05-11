<?php

class RegistrationModel
{
    public function checkUser($username)
    {
    $result= $this->db->select("SELECT * FROM `users` WHERE username = '".$username."'");
    $count = count($result);
    return $count;
    }
    public function createUser($data)
    {
    $this->db->insert('registration', $data);
    }
}
?>