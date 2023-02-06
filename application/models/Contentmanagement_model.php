<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contentmanagement_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Contentmanagement_model');
    }
    public function get_ContentManagement(){
        if(!empty($this->input->get("search"))){
          $this->db->like('home_text', $this->input->get("search"));
        }
        $query = $this->db->get("content_management");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'home_text' => $this->input->post('editor'),
        );
        return $this->db->insert('content_management', $data);
    }


    public function update_item($id,$columnName) 
    {	
    	if ($columnName=='Home') {
    		$column_name = 'home_text';
    	}elseif ($columnName=='About') {
    		$column_name = 'about_text';
    	}
        $data=array(
            $column_name => $this->input->post('editor')
        );
        if($id==0){
            return $this->db->insert('content_management',$data);
        }else{
            $this->db->where('content_id',$id);
            return $this->db->update('content_management',$data);
        }        
    }


    public function find_item_by_columnName($columnName)
    {    	
    	$this->db->select(' * FROM `content_management` WHERE '.$columnName.' is null', FALSE);
		return $query = $this->db->get()->row();
		// return	$this->db->where(array('home_text' => NULL));
        // return $this->db->get_where('content_management', array('home_text !=', 'null'))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('content_management', array('content_id' => $id));
    }

    public function getContent($type){
        $this->db->select(' * FROM `content_management` WHERE type = "'.$type.'"' , FALSE);
        return $query = $this->db->get()->row();
    }
}
?>