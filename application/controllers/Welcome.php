<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public $contentManagement;

	public $contactInfo;

	public $contact;

	public $pendant;

	public $chain;

	public $orders;

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
		$this->load->library('cart');

		$this->load->model('contentmanagement_model');
		$this->load->model('contactinfo_model');
		$this->load->model('feedback_model');
		$this->load->model('about_model');
		$this->load->model('contact_model');
		$this->load->model('pendant_model');
		$this->load->model('courses_model');
		$this->load->model('product_model');
		$this->load->model('chain_model');
		$this->load->model('orders_model');

		$this->contentManagement = new Contentmanagement_model;
		$this->contactInfo = new Contactinfo_model;
		$this->feedback = new Feedback_model;
		$this->about = new About_model;
		$this->contact = new Contact_model;
		$this->pendant = new Pendant_model;
		$this->courses = new Courses_model;
		$this->product = new Product_model;
		$this->chain = new Chain_model;
		$this->orders = new Orders_model;
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['data']  = $this->contentManagement->getContent('home');
		$data['contact_info']  = $this->contactInfo->getContent('contact_info');
		$data['feedback']  = $this->feedback->getContent('feedback');
		$data['pendant']  = $this->pendant->getContent('pendant');
		$data['product'] = $this->product->get_Product();
		$data['page'] = 'home';

		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/index.php', $data);
		$this->load->view('frontend/footer/index.php', $data);
	}

	public function about()
	{
		$data['isActive'] = 'active';
		$data['page'] = 'about';
		$data['about_us']  = $this->about->getContent();

		// echo "<pre>";
		// print_r($data['about_us']);
		// die;

		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/about/index.php', $data);
		$this->load->view('frontend/footer/index.php');
	}

	public function courses()
	{
		$data['page'] = 'courses';
		$data['data'] = $this->courses->get_Courses();
		// echo "about"; die;
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/courses/index.php', $data);
		$this->load->view('frontend/footer/index.php');
	}

	public function blog()
	{
		$data['page'] = 'blog';
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/blog/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function pricing()
	{
		$data['page'] = 'pricing';
		// echo "about"; die;
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/pricing/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function teacher()
	{
		$data['page'] = 'teacher';
		// echo "about"; die;
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/teacher/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function carbons()
	{
		$data['page'] = 'carbons';
		// echo "about"; die;
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/carbons/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function contact()
	{
		// echo 'pre';die;
		$data['page'] = 'contact';
		$this->load->config('email');
		$this->load->library('email');

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[250]');

		$this->load->view('frontend/header/index.php', $data);

		// Run form validation
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('frontend/contact/index.php');
		} else {
			$from = $this->config->item('smtp_user');
			$to = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to('carbontales@gmail.com');
			$this->email->bcc('sgswasti@gmail.com');
			$this->email->subject($subject);
			$this->email->message('From ' . $to . ' ' . $message);

			if ($this->email->send()) {
				$this->contact->insert_item();
				echo $this->session->set_flashdata('msg', 'Your request is submitted successfully!');
				$this->load->view('frontend/contact/index.php');
			} else {
				echo $this->session->set_flashdata('error', $this->email->print_debugger());
				$this->load->view('frontend/contact/index.php');
			}
		}
		$this->load->view('frontend/footer/index.php');
	}

	public function article($id)
	{

		$data['article'] = $this->article->find_item_by_id($id);

		$this->load->view('frontend/article.php', $data);
	}

	public function enquiry()
	{
		//$data['article'] = $this->article->find_item_by_id($id);

		// $this->load->view('frontend/enquiry.php');
	}
	public function makeyourown()
	{
		$data['page'] = 'makeyourown';
		$data['pendant']  = $this->pendant->get_Pendant();
		$data['chain']  = $this->chain->get_Chain();

		// echo "<pre>";
		// print_r($data['pendant']);
		// die;
		// echo "about"; die;
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/custom/index.php', $data);
		$this->load->view('frontend/footer/index.php');
	}

	function removeSpecialChar($str)
	{

		// Using preg_replace() function
		// to replace the word
		$res = preg_replace('/[^a-zA-Z0-9_ -]/s', ' ', $str);

		// Returning the result
		return $res;
	}

	public function addToCart()
	{
		$data['page'] = 'cart';
		$status  = 'err';
		// If post request is submitted via ajax 
		if ($this->input->post('id')) {
			$id = $this->input->post('id');
			$chainId = $this->input->post('chainId');
			$chainText = $this->input->post('chainText');
			$quantity = $this->input->post('quantity');
			$initial_name = $this->input->post('initial_name');
			$price = $this->input->post('price');
			$productDetails = $this->product->find_item_by_id($id);
			$chainDetails = $this->chain->find_item_by_id($chainId);
			// echo $productDetails['product_id']."_".$chainText;
			// if($chainText != "default"){
			// 	echo "<pre>"; print_r($productDetails['price'] + $chainDetails->$chainText);
			// 	echo "<pre>"; print_r($chainDetails->$chainText);die;
			// }
			if ($productDetails && isset($productDetails['product_id'])) {
				// $price = $productDetails['price'];
				// if ($chainText != "default") {
				// 	$price = $productDetails['price'] + $chainDetails->$chainText;
				// }
				// $cartData = $this->cart->contents();
				$data['productDetails'] = $productDetails;
				$datas = array(
					'id'      => $productDetails['product_id'] . "_" . $chainText,
					'qty'     => $quantity,
					'price'   => $price,
					'name'    => $this->removeSpecialChar($productDetails['name']),
					'initial_name' => $initial_name,
					'options' => array(
						'product_id' => $productDetails['product_id'],
						'product_code' => $productDetails['product_code'],
						'purity' => $productDetails['purity'],
						'diamond_one_weight' => $productDetails['diamond_one_weight'],
						'diamond_two_weight' => $productDetails['diamond_two_weight'],
						'stone_cost' => $productDetails['stone_cost'],
						'stone_wt' => $productDetails['stone_wt'],
						'gold_wt' => $productDetails['gold_wt'],
						'metal_weight' => $productDetails['metal'],
						'dimensions' => $productDetails['dimensions'],
						'no_of_diamonds' => $productDetails['no_of_diamonds'],
						'diamond_shape' => $productDetails['diamond_shape'],
						'image' => $productDetails['image_details'][0]->file_name,
						'pname' => $productDetails['name'],
						'chain_text' => $chainText,
						'is_custom' => $productDetails['is_custom'],
						'diamond_one' => $productDetails['diamond_one'],
						'diamond_two' => $productDetails['diamond_two'],
					)
				);
				$this->cart->insert($datas);

				// echo "<pre>"; print_r($this->cart->contents());die;
				$response['status'] = 'success';
				$response['redirect_url'] = site_url('cart');
				echo json_encode($response);
				die;
			}
		}
	}

	public function addToCartCustom()
	{
		$data['page'] = 'cart';
		$status  = 'err';
		// If post request is submitted via ajax 
		if ($this->input->post('pendant1ID') && $this->input->post('pendant2ID')) {
			$pendant1ID = $this->input->post('pendant1ID');
			$pendant2ID = $this->input->post('pendant2ID');
			$chainId = $this->input->post('chainId');
			$chainText = $this->input->post('chainText');
			$quantity = 1;
			$productDetails1 = $this->product->find_item_by_productcode($pendant1ID);
			$productDetails2 = $this->product->find_item_by_productcode($pendant2ID);
			$chainDetails = $this->chain->getContent();
			// echo "<pre>"; print_r($productDetails1);
			// echo "<pre>"; print_r($productDetails2);
			// echo "<pre>"; print_r($chainDetails[0]->with_gold_chain);
			// die;
			// echo $productDetails['product_id']."_".$chainText;
			// if($chainText != "default"){
			// 	echo "<pre>"; print_r($chainDetails->$chainText);die;
			// }

			if (
				$productDetails1 && isset($productDetails1['product_id']) &&
				$productDetails2 && isset($productDetails2['product_id']) &&
				$chainDetails && isset($chainDetails)
			) {
				// $price = $productDetails1['price'];
				// if($chainText != "default"){
				$price1 = $productDetails1['price'] + $chainDetails[0]->with_gold_chain;
				$price2 = $productDetails2['price'] + $chainDetails[0]->with_gold_chain;
				// }
				// $cartData = $this->cart->contents();

				$datas = array(
					array(
						'id'      => $productDetails1['product_id'] . "_with_gold_chain1",
						'qty'     => $quantity,
						'price'   => $price1,
						'name'    => $this->removeSpecialChar($productDetails1['name']),
						'initial_name' => '',
						'options' => array(
							'product_id' => $productDetails1['product_id'],
							'product_code' => $productDetails1['product_code'],
							'purity' => $productDetails1['purity'],
							'diamond_weight' => $productDetails1['diamond_weight'],
							'metal_weight' => $productDetails1['metal'],
							'dimensions' => $productDetails1['dimensions'],
							'no_of_diamonds' => $productDetails1['no_of_diamonds'],
							'diamond_shape' => $productDetails1['diamond_shape'],
							'image' => $productDetails1['image_details'][0]->file_name,
							'pname' => $productDetails1['name'],
							'chain_text' => 'with_gold_chain',
							'is_custom' => $productDetails1['is_custom'],
							'diamond_one' => $productDetails1['diamond_one'],
							'diamond_two' => $productDetails1['diamond_two'],
						)
					),
					array(
						'id'      => $productDetails2['product_id'] . "_with_gold_chain2",
						'qty'     => $quantity,
						'price'   => $price2,
						'name'    => $this->removeSpecialChar($productDetails2['name']),
						'initial_name' => '',
						'options' => array(
							'product_id' => $productDetails2['product_id'],
							'product_code' => $productDetails2['product_code'],
							'purity' => $productDetails2['purity'],
							'diamond_weight' => $productDetails2['diamond_weight'],
							'metal_weight' => $productDetails2['metal'],
							'dimensions' => $productDetails2['dimensions'],
							'no_of_diamonds' => $productDetails2['no_of_diamonds'],
							'diamond_shape' => $productDetails2['diamond_shape'],
							'image' => $productDetails2['image_details'][0]->file_name,
							'pname' => $productDetails2['name'],
							'chain_text' => 'with_gold_chain',
							'is_custom' => $productDetails2['is_custom'],
							'diamond_one' => $productDetails2['diamond_one'],
							'diamond_two' => $productDetails2['diamond_two'],
						)
					)
				);

				$this->cart->insert($datas);

				$response['status'] = 'success';
				$response['redirect_url'] = site_url('cart');
				echo json_encode($response);
				die;
			} else {
				$response['status'] = 'error';
				$response['redirect_url'] = site_url('cart');
				echo json_encode($response);
				die;
			}
		}
	}

	public function cart()
	{
		$data['page'] = 'cart';
		// $this->cart->destroy();
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/cart/index.php');
		$this->load->view('frontend/footer/index.php');
		// echo "<pre>"; print_r($this->cart->contents());die;
	}

	public function updateCart()
	{
		$status  = 'err';
		if ($this->input->post('rowid')) {
			$data = array(
				'rowid' => $this->input->post('rowid'),
				'qty'   => $this->input->post('quantity'),
			);
			if ($this->cart->update($data)) {
				$response['status'] = 'success';
				$response['redirect_url'] = site_url('cart');
				echo json_encode($response);
				die;
			}
		}
		$response['status'] = 'err';
		echo json_encode($response);
		die;
	}

	public function removeCart()
	{
		$this->cart->destroy();
	}

	public function removeItem()
	{
		$status  = 'err';
		if ($this->input->post('rowid')) {
			if ($this->cart->remove($this->input->post('rowid'))) {
				$response['status'] = 'success';
				$response['redirect_url'] = site_url('cart');
				echo json_encode($response);
				die;
			}
		}
		$response['status'] = 'err';
		echo json_encode($response);
		die;
	}

	public function checkout()
	{
		$data['page'] = 'checkout';
		if (!empty($this->cart->contents())) {
			foreach ($this->cart->contents() as $key => $items) {
				if ($this->cart->has_options($items['rowid']) == TRUE) {
					if ($items['options']['is_custom']) {
						if (empty($items['initial_name'])) {
							$name = '';
							$this->form_validation->set_rules('initial_name', 'Initial Name', 'trim|required|min_length[1]|max_length[16]');
							if ($this->form_validation->run() == FALSE) {
								// echo $this->input->post('initial_name');die;
								$this->load->view('frontend/header/index.php', $data);
								$this->load->view('frontend/cart/index.php', $data);
								$this->load->view('frontend/footer/index.php');
								return;
							}
							if (!empty($this->input->post('initial_name'))) {
								$name = $this->input->post('initial_name');
							}
							$updatedData = array(
								'rowid' => $items['rowid'],
								'initial_name' => $name,
							);
							if ($this->cart->update($updatedData)) {
								$this->load->view('frontend/header/index.php', $data);
								$this->load->view('frontend/checkout/index.php', $data);
								$this->load->view('frontend/footer/index.php');
								// exit;
								return;
							}
						}
					}
				}
			}

			$this->load->config('email');
			$this->load->library('email');

			$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[16]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
			$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|max_length[13]');
			$this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|min_length[4]|max_length[10]');
			$this->form_validation->set_rules('house', 'Apartment/House/Flat No', 'trim|required');
			$this->form_validation->set_rules('street', 'Street/Colony/Area Name', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			// $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[250]');

			// $this->load->view('frontend/header/index.php', $data);
			// echo "<pre>"; print_r($_POST);die;
			// Run form validation
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('frontend/header/index.php', $data);
				$this->load->view('frontend/checkout/index.php', $data);
				$this->load->view('frontend/footer/index.php');
			} else {
				$insertData = [];
				$chainDetails = $this->chain->getContent();
				foreach ($this->cart->contents() as $key => $items) {
					if ($this->cart->has_options($items['rowid']) == TRUE) {
						$productDetails = $this->product->find_item_by_id($items['options']['product_id']);
						// echo "<pre>"; print_r($productDetails);
						$t = $items['options']['chain_text'];
						// echo "<pre>"; print_r($chainDetails[0]->$t); 
						$insertData[$key]['product_id'] = $productDetails['product_id'];
						$insertData[$key]['product_code'] = $productDetails['product_code'];
						$insertData[$key]['with_chain'] = $items['options']['chain_text'];
						$insertData[$key]['initial_name'] = $items['initial_name'];
						$insertData[$key]['price'] = $this->cart->total();
						$insertData[$key]['qty'] = $items['qty'];
					}
				}
				$id = $this->orders->insert_item($insertData);
				// echo "<pre>"; print_r($this->cart->contents()); 

				if (!empty($id)) {
					// echo "<pre>"; print_r($id); die;
					$this->cart->destroy();
					echo $this->session->set_flashdata('headMsg', 'Order Successfully Placed.
				');
					echo $this->session->set_flashdata('msg', 'We are overwhelmed with your order. Our team will contact you for the payment details.
					Thankyou.');
					$this->load->view('frontend/header/index.php', $data);
					$this->load->view('frontend/orders/index.php');
					$this->load->view('frontend/footer/index.php');
				} else {
					echo $this->session->set_flashdata('error', "Something is wrong can not placed your order");
					$this->load->view('frontend/header/index.php', $data);
					$this->load->view('frontend/orders/index.php');
					$this->load->view('frontend/footer/index.php');
				}
			}
			// $this->load->view('frontend/footer/index.php');
		} else {

			$data['heading'] = "Cart is empty";
			$data['message'] = "Please select product";
			$this->load->view('frontend/header/index.php', $data);
			$this->load->view('errors/html/error_general.php', $data);
			$this->load->view('frontend/footer/index.php');
		}
	}

	public function getInTouch()
	{
		$data['page'] = 'touch';
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/touch/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function getInsideBox()
	{
		$data['page'] = 'inside';
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/box/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	public function gifting()
	{
		$data['page'] = 'gifting';
		$this->load->view('frontend/header/index.php', $data);
		$this->load->view('frontend/gifting/index.php');
		$this->load->view('frontend/footer/index.php');
	}

	// public function placeOrder() {
	// 	if (!$this->input->is_ajax_request()) {
	//         exit('No direct script access allowed');
	//     }else{
	// 		foreach ($this->cart->contents() as $key => $items) {
	// 			if ($this->cart->has_options($items['rowid']) == TRUE)
	// 				if($items['options']['is_custom']){
	// 					$name='';
	// 					$this->form_validation->set_rules('initial_name', 'Iinitial Name', 'trim|required|min_length[1]|max_length[16]');

	// 					if ($this->form_validation->run() == FALSE) {
	// 						$this->load->view('frontend/header/index.php', $data);
	// 						$this->load->view('frontend/checkout/index.php', $data);
	// 						$this->load->view('frontend/footer/index.php');
	// 					}
	// 					if(!empty($this->input->post('initial_name'))){
	// 						$name=$this->input->post('initial_name');
	// 					}
	// 					$data = array(
	// 						'rowid' => $items['rowid'],
	// 						'qty'   => $this->input->post('quantity'),
	// 						'initial_name' => $name,
	// 					);	
	// 					if($this->cart->update($data)){
	// 						$response['status'] = 'success';
	// 						$response['redirect_url'] = site_url('cart');
	// 						echo json_encode($response);
	// 						die;
	// 					}
	// 				}
	// 			}
	// 		}
	// 		$this->input->post('initial_name')
	// 	}
	// }
}