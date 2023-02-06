<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Article_model');
    }

    /**
     * This method is used to fetch all the data related to 
     * enquiry table.
     */

    public function get_enquiry()
    {
        if(!empty($this->input->get("search")))
        {
          $this->db->like('enquiry', $this->input->get("search"));
        }

        $query = $this->db->get("enquiry");
        return $query->result();
    }

    /**
     * This method is used to insert all the data into 
     * enquiry table.
     */
    public function insert_item()
    {    
        $data = array(   
            'mode' => $this->input->post('inlineRadioOptions'),
            'p_country' => $this->input->post('pCountry'),
            'p_city' => $this->input->post('pCity'),
            'p_state' => $this->input->post('pState'),
            'p_zip' => $this->input->post('pZip'),
            'p_address' => $this->input->post('pAddress'),
            'd_country' => $this->input->post('dCountry'),
            'd_city' => $this->input->post('dCity'),
            'd_state' => $this->input->post('dState'),
            'd_zip' => $this->input->post('dZip'),
            'd_address' => $this->input->post('dAddress')
        );

        return $this->db->insert('enquiry', $data);
    }

    /**
     * This method is used to updare the data into 
     * enquiry table.
     */
    public function update_item($id) 
    {	
        
        $data = array(   
            'mode' => $this->input->post('inlineRadioOptions'),
            'p_country' => $this->input->post('pCountry'),
            'p_city' => $this->input->post('pCity'),
            'p_state' => $this->input->post('pState'),
            'p_zip' => $this->input->post('pZip'),
            'p_address' => $this->input->post('pAddress'),
            'd_country' => $this->input->post('dCountry'),
            'd_city' => $this->input->post('dCity'),
            'd_state' => $this->input->post('dState'),
            'd_zip' => $this->input->post('dZip'),
            'd_address' => $this->input->post('dAddress')
        );
        if($id==0){
            return $this->db->insert('enquiry',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('enquiry',$data);
        }        
    }
}
?>