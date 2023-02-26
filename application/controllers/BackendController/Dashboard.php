<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('feedback_model');
        $this->feedback = new Feedback_model;
        
        $this->load->model('about_model');
        $this->about = new About_model;
        
        $this->load->model('contact_model');
        $this->contact = new Contact_model;
        /*
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->database();
            $this->load->model('CategoryModel');
            $this->load->library('form_validation');
        */
    }

    public function index()
    {
        $pageData = [
            'title' => 'Dashboard',
            'pagename' => 'admin/dashboard',
            'feedbackTitle' => 'Feedback',
            'feedbackCount' => $this->feedback->getFeedbackCount(),
            'articleTitle' => 'About Us',
            'articleCount' => $this->about->getAboutCount(),
            'contactUsTitle' => 'Contact Us',
            'contactUsCount' => $this->contact->getContactCount()
        ];
        $this->load->view("admin/layouts/master", $pageData);
    }
}
