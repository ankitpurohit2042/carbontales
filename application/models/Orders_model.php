<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_model extends CI_Model{

 public function __construct()
    {
        parent::__construct();
        $this->load->model('orders_model');
    }
    public function get_Orders(){
        if(!empty($this->input->get("search"))){
          $this->db->like('email', $this->input->get("search"));
        }
        $query = $this->db->get("orders");
        return $query->result();
    }


    public function insert_item($insertData)
    {
        // echo "<pre>"; print_r($insertData); die('model');
        foreach ($insertData as $key => $items) { 
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'pincode' => $this->input->post('pincode'),
            'apartment' => $this->input->post('house'),
            'street' => $this->input->post('street'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'message' => $this->input->post('message'),
            'product_id' => $items['product_id'],
            'product_code' => $items['product_code'],
            'with_chain' => $items['with_chain'],
            'initial_name' => isset($items['initial_name']) ? $items['initial_name'] : null,
            'price' => $items['price'],
            'quantity' => $items['qty'],
            'is_delivered' => 0,
        );
        $id = $this->db->insert('orders', $data);
        }
        return $id;
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
            return $this->db->insert('orders',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('orders',$data);
        }        
    }


   public function find_item_by_id($id)
    {
        return $this->db->get_where('orders', array('id' => $id))->row();
    }


    public function delete_item($id)
    {
        return $this->db->delete('orders', array('id' => $id));
    }

    public function getOrdersCount()
    {
        $query = $this->db->get("orders");
        return $query->num_rows();
    }
}
?>