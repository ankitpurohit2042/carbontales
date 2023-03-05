<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUserDetails($id){
        $query = $this->db->get_where('users', array('id' => $id));

        // Fetch the single row
        $row = $query->row();

        if ($row) {
            return $row;
        } else {
           return false;
        }
    }
}