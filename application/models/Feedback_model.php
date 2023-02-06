<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Feedback_model');
    }
    public function get_Feedback(){
        if(!empty($this->input->get("search"))){
          $this->db->like('name', $this->input->get("search"));
        }
        $query = $this->db->get("feedback");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'name' => $this->input->post('clientName'),
            'feedback' => $this->input->post('feedback'),
        );
        return $this->db->insert('feedback', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'name' => $this->input->post('clientName'),
            'feedback' => $this->input->post('feedback')
        );
        if($id==0){
            return $this->db->insert('feedback',$data);
        }else{
            $this->db->where('feedback_id',$id);
            return $this->db->update('feedback',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('feedback', array('feedback_id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('feedback', array('feedback_id' => $id));
    }

    public function getContent($type){
        $query = $this->db->get("feedback");
        return $query->result();
    }

    public function getFeedbackCount()
    {
        $query = $this->db->get("feedback");
        return $query->num_rows();
    }
}
?>