<?php

///< FILENAME:  Enquiry.php
///<
///< DESCRIPTION:
///<            This file is responsible for displaying the enquiry form and capturing
///< 			the data and then save it in database table using an enquiry model.
///<
///< Notes:
///<            NA
///<

defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller 
{

	public $enquiry; // Enquiry model object.

	public function __construct() 
    {
        parent::__construct();

        $this->load->model("enquiry_model");

        $this->enquiry = new Enquiry_model;
    }

	/**
     * This method is used to display the view for an enquiry 
     * enquiry form.
     */
    public function index()
    {
    	$this->load->view('frontend/enquiry');
    }

    /**
     * This method is used to insert all the data into 
     * enquiry table using an enquiry model.
     */
    public function addEnquiry()
    {
    	$this->enquiry->insert_item();
    	echo $this->session->set_flashdata('msg', 'Feedback added successfully!');
        redirect(base_url('enquiry'));
    }

}