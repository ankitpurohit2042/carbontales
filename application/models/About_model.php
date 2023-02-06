<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('About_model');
    }
    public function get_About(){
        if(!empty($this->input->get("search"))){
          $this->db->like('heading', $this->input->get("search"));
        }
        $query = $this->db->get("about");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'heading' => $this->input->post('heading'),
            'description' => $this->input->post('description'),
        );
        return $this->db->insert('about', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'heading' => $this->input->post('heading'),
            'description' => $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('about',$data);
        }else{
            $this->db->where('about_id',$id);
            return $this->db->update('about',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('about', array('about_id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('about', array('about_id' => $id));
    }

    public function getContent(){
        $query = $this->db->get("about");
        return $query->result();
    }

    public function getAboutCount()
    {
        $query = $this->db->get("about");
        return $query->num_rows();
    }
}
?>