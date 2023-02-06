<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendant_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendant_model');
    }
    public function get_Pendant(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
        }
        $query = $this->db->get("pendant");
        return $query->result();
    }


    public function insert_item($fileInfo)
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'product_code' => $this->input->post('product_code'),
            'price' => $this->input->post('price'),
            'diamond_weight' => $this->input->post('diamond_weight'),
            'gold_weight' => $this->input->post('gold_weight'),
            'is_custom' => $this->input->post('is_custom'),
            'file_name' => $fileInfo['file_name'],
            'file_type' => $fileInfo['file_type'],
            'file_path' => $fileInfo['file_path'],
            'full_path' => $fileInfo['full_path'],
            'file_ext' => $fileInfo['file_ext'],
        );
        return $this->db->insert('pendant', $data);
    }


    public function update_item($id,$fileInfo=false) 
    {	
        if ($fileInfo==false) {
            $data=array(
                'name' => $this->input->post('name'),
                'product_code' => $this->input->post('product_code'),
                'price' => $this->input->post('price'),
                'diamond_weight' => $this->input->post('diamond_weight'),
                'gold_weight' => $this->input->post('gold_weight'),
                'is_custom' => $this->input->post('is_custom'),
            );
        }else{
            $data=array(
                'name' => $this->input->post('name'),
                'product_code' => $this->input->post('product_code'),
                'price' => $this->input->post('price'),
                'diamond_weight' => $this->input->post('diamond_weight'),
                'gold_weight' => $this->input->post('gold_weight'),
                'is_custom' => $this->input->post('is_custom'),
                'file_name' => $fileInfo['file_name'],
                'file_type' => $fileInfo['file_type'],
                'file_path' => $fileInfo['file_path'],
                'full_path' => $fileInfo['full_path'],
                'file_ext' => $fileInfo['file_ext'],
            );
        }
        if($id==0){
            return $this->db->insert('pendant',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('pendant',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('pendant', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('pendant', array('id' => $id));
    }

    public function getContent($type){
        $query = $this->db->get("pendant");
        return $query->result();
    }

    public function getPendantCount()
    {
        $query = $this->db->get("pendant");
        return $query->num_rows();
    }
}
?>