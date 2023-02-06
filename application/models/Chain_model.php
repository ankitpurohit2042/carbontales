<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chain_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('Chain_model');
    }
    public function get_Chain(){
        if(!empty($this->input->get("search"))){
          $this->db->like('heading', $this->input->get("search"));
        }
        $query = $this->db->get("chain");
        return $query->result();
    }


    public function insert_item()
    {    
        $data = array(
            'without_chain' => trim($this->input->post('without_chain')),
            'with_platinum_chain' => trim($this->input->post('with_platinum_chain')),
            'gold_price' => trim($this->input->post('gold_price'))
        );
        return $this->db->insert('chain', $data);
    }


    public function update_item($id) 
    {	
        $data=array(
            'without_chain' => trim($this->input->post('without_chain')),
            'with_platinum_chain' => trim($this->input->post('with_platinum_chain')),
            'gold_price' => trim($this->input->post('gold_price'))
        );
        if($id==0){
            return $this->db->insert('chain',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('chain',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('chain', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('chain', array('id' => $id));
    }

    public function getContent(){
        $query = $this->db->get("chain");
        return $query->result();
    }

    public function getChainCount()
    {
        $query = $this->db->get("chain");
        return $query->num_rows();
    }
}
?>