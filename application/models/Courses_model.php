<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Courses_model');
    }
    public function get_Courses(){
        if(!empty($this->input->get("search"))){
          $this->db->like('course_name', $this->input->get("search"));
        }
        $query = $this->db->get("courses");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'email' => $this->input->post('email'),
            'query' => $this->input->post('message'),
        );
        return $this->db->insert('courses', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'name' => $this->input->post('name'),
            'subject' => $this->input->post('subject'),
            'email' => $this->input->post('email'),
            'query' => $this->input->post('query'),
        );
        if($id==0){
            return $this->db->insert('courses',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('courses',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('courses', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('courses', array('id' => $id));
    }

    public function getCoursesCount()
    {
        $query = $this->db->get("courses");
        return $query->num_rows();
    }
}
?>