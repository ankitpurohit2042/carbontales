<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }
    public function get_Product()
    {
        if (!empty($this->input->get("search"))) {
            $this->db->like('product', $this->input->get("search"));
        }
        $result = [];
        $query = $this->db->get_where('product', array('is_active' => 1));
        $result_detail = $query->result();
        $product_image = $this->db->get("product_image");
        $result_image = $product_image->result();
        foreach ($result_detail as $key => $value) {
            foreach ($result_image as $imagekey => $image) {
                if ($value->product_id == $image->product_id) {
                    $result[$key]['product_id'] = $value->product_id;
                    $result[$key]['name'] = $value->name;
                    $result[$key]['product_code'] = $value->product_code;
                    $result[$key]['description'] = $value->description;
                    $result[$key]['making_cost'] = $value->making_cost;
                    $result[$key]['diamond_one'] = $value->diamond_one;
                    $result[$key]['diamond_two'] = $value->diamond_two;
                    $result[$key]['stone_cost'] = $value->stone_cost;
                    $result[$key]['stone_wt'] = $value->stone_wt;
                    $result[$key]['stone_type'] = $value->stone_type;
                    $result[$key]['gold_wt'] = $value->gold_wt;
                    $result[$key]['purity'] = $value->purity;
                    $result[$key]['product'] = $value->product;
                    $result[$key]['diamond_one_weight'] = $value->diamond_one_weight;
                    $result[$key]['diamond_two_weight'] = $value->diamond_two_weight;
                    $result[$key]['height'] = $value->height;
                    $result[$key]['diamonds'] = $value->diamonds;
                    $result[$key]['diamond_clarity'] = $value->diamond_clarity;
                    $result[$key]['diamond_color'] = $value->diamond_color;
                    $result[$key]['diamond_setting'] = $value->diamond_setting;
                    $result[$key]['collection'] = $value->collection;
                    $result[$key]['metal'] = $value->metal;
                    $result[$key]['metal_color'] = $value->metal_color;
                    $result[$key]['dimensions'] = $value->dimensions;
                    $result[$key]['diamond_shape'] = $value->diamond_shape;
                    $result[$key]['occasion'] = $value->occasion;
                    $result[$key]['no_of_diamonds'] = $value->no_of_diamonds;
                    $result[$key]['chain_length'] = $value->chain_length;
                    $result[$key]['product_category'] = $value->product_category;
                    $result[$key]['is_active'] = $value->is_active;
                    $result[$key]['is_custom'] = $value->is_custom;
                    $result[$key]['type'] = $value->type;
                    $result[$key]['created_at'] = $value->created_at;
                    $result[$key]['image_details'][] = $image;
                }
            }
        }
        return $result;
    }


    public function insert_item()
    {
        $data = array(
            'name' => trim($this->input->post('name')),
            'product_code' => trim($this->input->post('product_code')),
            'description' => trim($this->input->post('description')),
            'making_cost' => trim($this->input->post('making_cost')),
            'diamond_one' => trim($this->input->post('diamond_one')),
            'diamond_two' => trim($this->input->post('diamond_two')),
            'stone_cost' => trim($this->input->post('stone_cost')),
            'stone_wt' => trim($this->input->post('stone_wt')),
            'stone_type' => trim($this->input->post('stone_type')),
            'gold_wt' => trim($this->input->post('gold_wt')),
            'purity' => trim($this->input->post('purity')),
            'product' => trim($this->input->post('product')),
            'diamond_one_weight' => trim($this->input->post('diamond_one_weight')),
            'diamond_two_weight' => trim($this->input->post('diamond_two_weight')),
            'height' => trim($this->input->post('height')),
            'diamonds' => trim($this->input->post('diamonds')),
            'diamond_clarity' => trim($this->input->post('diamond_clarity')),
            'diamond_color' => trim($this->input->post('diamond_color')),
            'diamond_setting' => trim($this->input->post('diamond_setting')),
            'collection' => trim($this->input->post('collection')),
            'metal' => trim($this->input->post('metal')),
            'metal_color' => trim($this->input->post('metal_color')),
            'dimensions' => trim($this->input->post('dimensions')),
            'diamond_shape' => trim($this->input->post('diamond_shape')),
            'occasion' => trim($this->input->post('occasion')),
            'no_of_diamonds' => trim($this->input->post('no_of_diamonds')),
            'chain_length' => trim($this->input->post('chain_length')),
            'product_category' => trim($this->input->post('product_category')),
            'is_active' => trim($this->input->post('isActive')),
            'is_custom' => $this->input->post('isCustom'),
            'type' => trim($this->input->post('type')),
        );
        $this->db->insert('product', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function insert_image($fileInfo, $id)
    {
        $data = array(
            'product_id' => $id,
            'file_name' => $fileInfo['file_name'],
            'file_type' => $fileInfo['file_type'],
            'file_path' => $fileInfo['file_path'],
            'full_path' => $fileInfo['full_path'],
            'file_ext' => $fileInfo['file_ext'],
            'is_active' => 1,
        );
        return $this->db->insert('product_image', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }



    public function update_item($id, $fileInfo = false)
    {
        if ($fileInfo == false) {
            
            $data = array(
                'name' => $this->input->post('name'),
                'product_code' => $this->input->post('product_code'),
                'description' => $this->input->post('description'),
                'making_cost' => $this->input->post('making_cost'),
                'diamond_one' => trim($this->input->post('diamond_one')),
                'diamond_two' => trim($this->input->post('diamond_two')),
                'stone_cost' => $this->input->post('stone_cost'),
                'stone_wt' => $this->input->post('stone_wt'),
                'stone_type' => $this->input->post('stone_type'),
                'gold_wt' => $this->input->post('gold_wt'),
                'purity' => trim($this->input->post('purity')),
                'product' => trim($this->input->post('product')),
                'diamond_one_weight' => trim($this->input->post('diamond_one_weight')),
                'diamond_two_weight' => trim($this->input->post('diamond_two_weight')),
                'height' => trim($this->input->post('height')),
                'diamonds' => trim($this->input->post('diamonds')),
                'diamond_clarity' => trim($this->input->post('diamond_clarity')),
                'diamond_color' => trim($this->input->post('diamond_color')),
                'diamond_setting' => trim($this->input->post('diamond_setting')),
                'collection' => trim($this->input->post('collection')),
                'metal' => trim($this->input->post('metal')),
                'metal_color' => trim($this->input->post('metal_color')),
                'dimensions' => trim($this->input->post('dimensions')),
                'diamond_shape' => trim($this->input->post('diamond_shape')),
                'occasion' => trim($this->input->post('occasion')),
                'no_of_diamonds' => trim($this->input->post('no_of_diamonds')),
                'chain_length' => trim($this->input->post('chain_length')),
                'product_category' => trim($this->input->post('product_category')),
                'is_active' => $this->input->post('isActive'),
                'is_custom' => $this->input->post('isCustom'),
                'type' => $this->input->post('type'),
            );
        } else {
            // $data = array(
            //     'title' => $this->input->post('title'),
            //     'article' => $this->input->post('article'),
            //     'file_name' => $fileInfo['file_name'],
            //     'file_type' => $fileInfo['file_type'],
            //     'file_path' => $fileInfo['file_path'],
            //     'full_path' => $fileInfo['full_path'],
            //     'file_ext' => $fileInfo['file_ext'],
            // );
        }
        if ($id == 0) {
            return $this->db->insert('product', $data);
        } else {
            $this->db->where('product_id', $id);
            return $this->db->update('product', $data);
        }
    }


    public function find_item_by_id($id)
    {
        $result = [];
        $query = $this->db->get_where('product', array('product_id' => $id))->row();
        $product_image = $this->db->get_where("product_image", array('product_id' => $id));
        $result_image = $product_image->result();

        $result['product_id'] = $query->product_id;
        $result['name'] = $query->name;
        $result['product_code'] = $query->product_code;
        $result['description'] = $query->description;
        $result['making_cost'] = $query->making_cost;
        $result['diamond_one'] = $query->diamond_one;
        $result['diamond_two'] = $query->diamond_two;
        $result['stone_cost'] = $query->stone_cost;
        $result['stone_wt'] = $query->stone_wt;
        $result['stone_type'] = $query->stone_type;
        $result['gold_wt'] = $query->gold_wt;
        $result['purity'] = $query->purity;
        $result['product'] = $query->product;
        $result['diamond_one_weight'] = $query->diamond_one_weight;
        $result['diamond_two_weight'] = $query->diamond_two_weight;
        $result['height'] = $query->height;
        $result['diamonds'] = $query->diamonds;
        $result['diamond_clarity'] = $query->diamond_clarity;
        $result['diamond_color'] = $query->diamond_color;
        $result['diamond_setting'] = $query->diamond_setting;
        $result['collection'] = $query->collection;
        $result['metal'] = $query->metal;
        $result['metal_color'] = $query->metal_color;
        $result['dimensions'] = $query->dimensions;
        $result['diamond_shape'] = $query->diamond_shape;
        $result['occasion'] = $query->occasion;
        $result['no_of_diamonds'] = $query->no_of_diamonds;
        $result['chain_length'] = $query->chain_length;
        $result['product_category'] = $query->product_category;
        $result['is_active'] = $query->is_active;
        $result['is_custom'] = $query->is_custom;
        $result['type'] = $query->type;
        $result['created_at'] = $query->created_at;
        $result['image_details'] = $result_image;

        return $result;
    }


    public function delete_item($id)
    {
        $this->db->delete('product_image', array('product_id' => $id));
        return $this->db->delete('product', array('product_id' => $id));
    }

    public function getContent($type)
    {
        $query = $this->db->get("product");
        return $query->result();
    }

    public function getProductCount()
    {
        $query = $this->db->get("product");
        return $query->num_rows();
    }

    public function delete_image($id)
    {
        $delete = $this->db->delete('product_image', array('image_id' => $id));
        return $delete?true:false;
    }

    public function find_item_by_productcode($id)
    {
        $result = [];
        $query = $this->db->get_where('product', array('product_code' => $id))->row();
        if(!empty($query)){
            $product_image = $this->db->get_where("product_image", array('product_id' => $query->product_id));
            $result_image = $product_image->result();
            
            $result['product_id'] = $query->product_id;
            $result['name'] = $query->name;
            $result['product_code'] = $query->product_code;
            $result['description'] = $query->description;
            $result['making_cost'] = $query->making_cost;
            $result['diamond_one'] = $query->diamond_one;
            $result['diamond_two'] = $query->diamond_two;
            $result['stone_cost'] = $query->stone_cost;
            $result['stone_wt'] = $query->stone_wt;
            $result['stone_type'] = $query->stone_type;
            $result['gold_wt'] = $query->gold_wt;
            $result['purity'] = $query->purity;
            $result['product'] = $query->product;
            $result['diamond_one_weight'] = $query->diamond_one_weight;
            $result['diamond_two_weight'] = $query->diamond_two_weight;
            $result['height'] = $query->height;
            $result['diamonds'] = $query->diamonds;
            $result['diamond_clarity'] = $query->diamond_clarity;
            $result['diamond_color'] = $query->diamond_color;
            $result['diamond_setting'] = $query->diamond_setting;
            $result['collection'] = $query->collection;
            $result['metal'] = $query->metal;
            $result['metal_color'] = $query->metal_color;
            $result['dimensions'] = $query->dimensions;
            $result['diamond_shape'] = $query->diamond_shape;
            $result['occasion'] = $query->occasion;
            $result['no_of_diamonds'] = $query->no_of_diamonds;
            $result['chain_length'] = $query->chain_length;
            $result['product_category'] = $query->product_category;
            $result['is_active'] = $query->is_active;
            $result['is_custom'] = $query->is_custom;
            $result['type'] = $query->type;
            $result['created_at'] = $query->created_at;
            $result['image_details'] = $result_image;
        }

        return $result;
    }
}