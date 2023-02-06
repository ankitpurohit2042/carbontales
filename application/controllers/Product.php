<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{


	public $contentManagement;

	public $contactInfo;

	public $contact;

	public $article;

    public $product;

	public $chain;

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('contentmanagement_model');
		$this->load->model('contactinfo_model');
		$this->load->model('feedback_model');
		$this->load->model('about_model');
		$this->load->model('contact_model');
		// $this->load->model('article_model');
        $this->load->model('product_model');
		$this->load->model('courses_model');
		$this->load->model('chain_model');

		$this->contentManagement = new Contentmanagement_model;
		$this->contactInfo = new Contactinfo_model;
		$this->feedback = new Feedback_model;
		$this->about = new About_model;
		$this->contact = new Contact_model;
		// $this->article = new Article_model;
		$this->courses = new Courses_model;
        $this->product = new Product_model;
		$this->chain = new Chain_model;
	}

    public function index()
	{
		$data = array();
		$data['title'] = 'List all Product';
        $data['pageName'] = 'Product';
        $data['product'] = $this->product->get_Product();
		$data['chain'] = $this->chain->get_Chain();
		$data['page'] = 'view product';
		// echo "<pre>"; print_r($data['product']);die;

		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/product/index.php', $data);
		$this->load->view('frontend/footer/index.php', $data);
	}

    public function viewProduct($id){
        $data['title'] = 'View Product';
        $data['pageName'] = 'Product';
        $data['product'] = $this->product->find_item_by_id($id);
		$data['chain'] = $this->chain->get_Chain();
        $data['page'] = 'product';

        $this->load->view('frontend/header/index.php', $data);
        $this->load->view('frontend/product/view_product', $data);
        $this->load->view('frontend/footer/index.php', $data);
    }
}