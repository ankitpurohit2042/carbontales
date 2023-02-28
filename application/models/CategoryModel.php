<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CategoryModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllCategories()
    {
        $query = $this->db->get('categories');
        $result = $query->result();

        $i = 1;
        foreach ($result as $row) {
            $row->sno = $i;
            $i++;
        }
        return $result;
    }

    /*
     * Get Category details
     */
    public function getCategoryDetail($id)
    {
        $query = $this->db->get_where('categories', array('id' => $id));

        // Fetch the single row
        $row = $query->row();

        if ($row) {
            return $row;
        } else {
           return false;
        }

    }

    /**
     * Update category details
     */
    public function updateCategoryData($id, $data)
    {
        $da = $this->db->where('id', $id);
        // Update the data
        $this->db->update('categories', $data);

        // Check if the update was successful
        if ($this->db->affected_rows() > 0) {
            echo 'Data updated successfully.';
        } else {
            echo 'Data update failed.';
        }
    }

    public function delete($id) {
        $data = $this->db->where('id', $id);
        if($data){
            $this->db->delete('categories');
            return true;
        }
        return false;
    }
}
