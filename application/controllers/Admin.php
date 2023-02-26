<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public $contentManagement;
    public $feedback;
    public $about;
    public $contactInfo;
    public $pendant;
    public $contact;
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
        $this->load->helper("file");

        // $this->load->library('upload');

        $this->load->model('login_model');
        $this->load->model('contentmanagement_model');
        $this->load->model('feedback_model');
        $this->load->model('about_model');
        $this->load->model('contactinfo_model');
        $this->load->model('pendant_model');
        $this->load->model('contact_model');
        $this->load->model('product_model');
        $this->load->model('chain_model');

        $this->contentManagement = new Contentmanagement_model;
        $this->feedback = new Feedback_model;
        $this->about = new About_model;
        $this->contactInfo = new Contactinfo_model;
        $this->pendant = new Pendant_model;
        $this->contact = new Contact_model;
        $this->product = new Product_model;
        $this->chain = new Chain_model;
    }

    // login method
    public function index()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            $data['title'] = ucfirst('Dashboard');
            return $this->dashboard();
        }
        $data['title'] = ucfirst('Login');
        $this->load->view('admin/auth/login', $data);
    }

    // authentication and show dashboard method
    public function dashboard()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            $fname = $this->session->userdata('fname');
            $lname = $this->session->userdata('lname');

            $data['feedbackTitle'] = "Feedback";
            $data['feedbackCount'] = $this->feedback->getFeedbackCount();
            $data['aboutTitle'] = "About Us";
            $data['aboutCount'] = $this->about->getAboutCount();
            $data['pendantTitle'] = "Pendant";
            $data['pendantCount'] = $this->pendant->getPendantCount();
            $data['contactUsTitle'] = "Contact Us";
            $data['contactUsCount'] = $this->contact->getContactCount();

            $data['title'] = ucfirst($fname . ' ' . $lname);
            $this->load->view('admin/templates/dashboard_header', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('admin/templates/dashboard_footer', $data);
        } else {
            $email = $this->input->post('email', TRUE);
            $password = md5($this->input->post('password', TRUE));
            $validate = $this->login_model->validate($email, $password);
            if ($validate->num_rows() > 0) {
                $data = $validate->row_array();
                $fname = $data['first_name'];
                $lname = $data['last_name'];
                $email = $data['email'];
                $sesdata = array('fname' => $fname, 'lname' => $lname, 'email' => $email, 'logged_in' => TRUE);
                $this->session->set_userdata($sesdata);
                // access login for admin
                $fname = $this->session->userdata('fname');
                $lname = $this->session->userdata('lname');

                $data['feedbackTitle'] = "Feedback";
                $data['feedbackCount'] = $this->feedback->getFeedbackCount();
                $data['aboutTitle'] = "About Us";
                $data['aboutCount'] = $this->about->getAboutCount();
                $data['pendantTitle'] = "Pendant";
                $data['pendantCount'] = $this->pendant->getPendantCount();
                $data['contactUsTitle'] = "Contact Us";
                $data['contactUsCount'] = $this->contact->getContactCount();

                $data['title'] = ucfirst($fname . ' ' . $lname);

                $this->load->view('admin/templates/dashboard_header', $data);
                $this->load->view('admin/dashboard', $data);
                $this->load->view('admin/templates/dashboard_footer', $data);
            } else {
                echo $this->session->set_flashdata('msg', 'Username or Password is Wrong');
                redirect(base_url('admin/'));
            }
        }
    }

    // logout method
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/'));
    }

    // change home text of frontend
    public function changeHomeText()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }
        $data['title'] = 'Add Home Text';
        $data['pageName'] = 'Home';
        $data['data'] = $this->contentManagement->find_item_by_columnName('about_text');
        $columnName = 'Home';
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('editor', 'Editor', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/content_management/index', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $id = $this->input->post("cm_id");
            echo $this->session->set_flashdata('msg', 'Home text updated successfully!');
            $this->contentManagement->update_item($id, $columnName);
            redirect(base_url('admin/changeHomeText'));
        }
    }

    // change about us text frontend
    public function changeAboutText()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }
        $data['title'] = 'Add/Update About Us Text';
        $data['pageName'] = 'About';
        $data['data'] = $this->contentManagement->find_item_by_columnName('home_text');
        $columnName = 'About';
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('editor', 'Editor', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/content_management/index', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $id = $this->input->post("cm_id");
            echo $this->session->set_flashdata('msg', 'About-us updated successfully!');
            $this->contentManagement->update_item($id, $columnName);
            redirect(base_url('admin/changeAboutText'));
        }
    }

    // about page to list abouts
    public function about()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'About Lists';
        $data['data'] = $this->about->get_About();

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/about/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // about page to add about us
    public function addAbout()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Add About';
        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/about/about', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->about->insert_item();
            echo $this->session->set_flashdata('msg', 'About added successfully!');
            redirect(base_url('admin/about'));
        }
    }

    // about page to edit about us
    public function editAbout($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Update About';
        $data['data'] = $this->about->find_item_by_id($id);


        $this->form_validation->set_rules('heading', 'Heading', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/about/about', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->about->update_item($id);
            echo $this->session->set_flashdata('msg', 'About updated successfully!');
            redirect(base_url('admin/about'));
        }
    }

    // delete about
    public function deleteAbout($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->about->delete_item($id);
        echo $this->session->set_flashdata('msg', 'About deleted successfully!');
        redirect(base_url('admin/about'));
    }

    // feedback page to list feedbacks
    public function feedback()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Feedback Lists';
        $data['data'] = $this->feedback->get_Feedback();

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/feedback/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // feedback page to add feedbacks
    public function addFeedback()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Add Feedback';
        $this->form_validation->set_rules('clientName', 'Name', 'required');
        $this->form_validation->set_rules('feedback', 'Feedback', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/feedback/feedback', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->feedback->insert_item();
            echo $this->session->set_flashdata('msg', 'Feedback added successfully!');
            redirect(base_url('admin/feedback'));
        }
    }

    // feedback page to edit feedbacks
    public function editFeedback($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Update Feedback';
        $data['data'] = $this->feedback->find_item_by_id($id);


        $this->form_validation->set_rules('clientName', 'Name', 'required');
        $this->form_validation->set_rules('feedback', 'Feedback', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/feedback/feedback', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->feedback->update_item($id);
            echo $this->session->set_flashdata('msg', 'Feedback updated successfully!');
            redirect(base_url('admin/feedback'));
        }
    }

    // delete feedback
    public function deleteFeedback($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->feedback->delete_item($id);
        echo $this->session->set_flashdata('msg', 'Feedback deleted successfully!');
        redirect(base_url('admin/feedback'));
    }

    // Contact info page
    public function contactInfo()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }
        $data['title'] = 'Add/Update Contact Info';
        $data['pageName'] = 'Contact Info';
        $data['data'] = $this->contactInfo->get_ContactInfo();

        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/contact_info/index', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $id = $this->input->post("ci_id");
            echo $this->session->set_flashdata('msg', 'Contact-info updated successfully!');
            $this->contactInfo->update_item($id);
            redirect(base_url('admin/contactInfo'));
        }
    }

    // pendant page
    public function pendant()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'List all Pendant';
        $data['pageName'] = 'Pendant';
        $data['data'] = $this->pendant->get_Pendant();

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/pendant/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // pendant page to add article
    public function addPendant()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }
        
        $data['title'] = 'Add Pendant';
        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_code', 'product_code', 'required');
        // echo "<pre>"; print_r($_POST);die('22');
        if ($this->form_validation->run() == FALSE) {
            // echo "<pre>"; print_r($_POST);die('11');
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/pendant/pendant', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            // echo "<pre>"; print_r($_POST);die('33');
            $config['upload_path'] = ROOT_UPLOAD_PATH_PENDANT;
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            // $config['max_size'] = 8000;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('profile_image')) {
                echo $this->session->set_flashdata('error', $this->upload->display_errors());
                $this->load->view('admin/templates/dashboard_header');
                $this->load->view('admin/pendant/pendant', $data);
                $this->load->view('admin/templates/dashboard_footer');
            } else {
                $fileInfo = $this->upload->data();
                if (!empty($fileInfo['file_name'])) {
                    $path = $fileInfo['full_path'];
                    chmod($path, 0777);
                }
                $this->pendant->insert_item($fileInfo);
                echo $this->session->set_flashdata('msg', 'pendant added successfully!');
                redirect(base_url('admin/pendant'));
            }
        }
    }

    // pendant page to edit pendant
    public function editPendant($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Update pendant';
        $data['data'] = $this->pendant->find_item_by_id($id);

        $this->form_validation->set_rules('name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_code', 'product_code', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/pendant/pendant', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            if (empty($_FILES['profile_image']['name'])) {
                $this->pendant->update_item($id);
                echo $this->session->set_flashdata('msg', 'pendant Updated successfully!');
                redirect(base_url('admin/pendant'));
            } else {
                $config['upload_path'] = ROOT_UPLOAD_PATH_PENDANT;
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                // $config['max_size'] = 8000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('profile_image')) {
                    echo $this->session->set_flashdata('error', $this->upload->display_errors());
                    $this->load->view('admin/templates/dashboard_header');
                    $this->load->view('admin/pendant/pendant', $data);
                    $this->load->view('admin/templates/dashboard_footer');
                } else {

                    $fileInfo = $this->upload->data();
                    if (!empty($fileInfo['file_name'])) {
                        $path = $fileInfo['full_path'];
                        chmod($path, 0777);
                        $deleteImage = $this->input->post('deleteImage');
                        chmod($deleteImage, 0777);
                        delete_files($deleteImage, true);
                        // @unlink(ROOT_UPLOAD_PATH . '/' . $fileName);
                        @unlink($deleteImage);
                    }
                    $this->pendant->update_item($id, $fileInfo);
                    echo $this->session->set_flashdata('msg', 'pendant Updated successfully!');
                    redirect(base_url('admin/pendant'));
                }
            }
        }
    }

    // delete pendant
    public function deletePendant($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->pendant->delete_item($id);
        echo $this->session->set_flashdata('msg', 'pendant deleted successfully!');
        redirect(base_url('admin/pendant'));
    }

    // contact page to list Cotnactus
    public function contact()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Contact-us Lists';
        $data['data'] = $this->contact->get_Contact();

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/contact/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // contact us page to view Contact details
    public function viewContact($id)
    {
        $this->load->config('email');
        $this->load->library('email');

        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'View Contact-us';
        $data['data'] = $this->contact->find_item_by_id($id);


        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/contact/contact', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $from = $this->config->item('smtp_user');
            $to = $data['data']->email;
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            $this->email->set_newline("\r\n");
            $this->email->from($from);
            $this->email->to($to);
            $this->email->cc('kush.acro777@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                echo $this->session->set_flashdata('msg', 'Your Email has successfully been sent.');
                redirect(base_url('admin/contact'));
            } else {
                echo $this->session->set_flashdata('error', $this->email->print_debugger());
                redirect(base_url('admin/contact'));
            }
        }
    }

    // delete contact
    public function deleteContact($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->contact->delete_item($id);
        echo $this->session->set_flashdata('msg', 'Contact Query deleted successfully!');
        redirect(base_url('admin/contact'));
    }

    // product page
    public function product()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'List all Product';
        $data['pageName'] = 'Product';
        $data['data'] = $this->product->get_Product();
        // echo "<pre>"; print_r($this->product->get_Product());die;
        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/product/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // product page to add product
    public function addProduct()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Add Product';
        $data['data']['image_details'] = [];
        $this->form_validation->set_rules('name', 'Name', 'required');
        // $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('making_cost', 'Making Cost', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/product/product', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $config['upload_path'] = ROOT_UPLOAD_PATH;
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 8000;


            $this->load->library('upload', $config);
            $id = $this->product->insert_item();
            if (!empty($id)) {
                $dataInfo = array();
                $files = $_FILES;
                $cpt = count($_FILES['profile_image']['name']);
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['profile_image']['name'] = $files['profile_image']['name'][$i];
                    $_FILES['profile_image']['type'] = $files['profile_image']['type'][$i];
                    $_FILES['profile_image']['tmp_name'] = $files['profile_image']['tmp_name'][$i];
                    $_FILES['profile_image']['error'] = $files['profile_image']['error'][$i];
                    $_FILES['profile_image']['size'] = $files['profile_image']['size'][$i];
                    $this->upload->do_upload('profile_image');
                    $dataInfo[] = $this->upload->data();
                    if (!empty($dataInfo['file_name'])) {
                        $path = $dataInfo['full_path'];
                        chmod($path, 0777);
                    }
                }
                foreach ($dataInfo as $key => $value) {
                    $this->product->insert_image($value, $id);
                }
            }
            echo $this->session->set_flashdata('msg', 'Product added successfully!');
            redirect(base_url('admin/product'));
        }
    }

    // product page to edit product
    public function editProduct($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Update Product';
        $data['data'] = $this->product->find_item_by_id($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('making_cost', 'Making Cost', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/product/product', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            if (empty($_FILES['profile_image']['name'][0])) {
                $this->product->update_item($id);
                echo $this->session->set_flashdata('msg', 'Product Updated successfully!');
                redirect(base_url('admin/product'));
            } else {
                $config['upload_path'] = ROOT_UPLOAD_PATH;
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = 10000;

                $this->load->library('upload', $config);

                if (!empty($id)) {
                    $this->product->update_item($id);
                    $dataInfo = array();
                    $files = $_FILES;
                    $cpt = count($_FILES['profile_image']['name']);
                    for ($i = 0; $i < $cpt; $i++) {
                        $_FILES['profile_image']['name'] = $files['profile_image']['name'][$i];
                        $_FILES['profile_image']['type'] = $files['profile_image']['type'][$i];
                        $_FILES['profile_image']['tmp_name'] = $files['profile_image']['tmp_name'][$i];
                        $_FILES['profile_image']['error'] = $files['profile_image']['error'][$i];
                        $_FILES['profile_image']['size'] = $files['profile_image']['size'][$i];
                        $this->upload->do_upload('profile_image');
                        $dataInfo[] = $this->upload->data();
                        if (!empty($dataInfo['file_name'])) {
                            $path = $dataInfo['full_path'];
                            chmod($path, 0777);
                        }
                    }
                    foreach ($dataInfo as $key => $value) {
                        $this->product->insert_image($value, $id);
                    }
                }
                echo $this->session->set_flashdata('msg', 'Product Updated successfully!');
                redirect(base_url('admin/product'));
            }
        }
    }

    // view product
    public function viewProduct($id)
    {
        $data['title'] = 'View Product';
        $data['pageName'] = 'Product';
        $data['data'] = $this->product->find_item_by_id($id);
        $data['chain'] = $this->chain->get_Chain();
        $data['page'] = 'product';

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/product/view_product', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // delete product
    public function deleteProduct($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->product->delete_item($id);
        echo $this->session->set_flashdata('msg', 'Product deleted successfully!');
        redirect(base_url('admin/product'));
    }

    // delete productImage
    public function deleteProductImage()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }
        $status  = 'err';
        // If post request is submitted via ajax 
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
            $fileName = $this->input->post('fileName');
            // Delete image data 
            $delete = $this->product->delete_image($id);

            if ($delete) {
                // Remove files from the server  
                @unlink(ROOT_UPLOAD_PATH . '/' . $fileName);
                $status = 'ok';
            }
        }
        echo $status;
        die;
    }

    // chain page to list chain
    public function chain()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Chain Type Lists';
        $data['data'] = $this->chain->get_Chain();

        $this->load->view('admin/templates/dashboard_header');
        $this->load->view('admin/chain/index', $data);
        $this->load->view('admin/templates/dashboard_footer');
    }

    // chain page to add chain us
    public function addChain()
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Add Chain';
        // $this->form_validation->set_rules('without_chain', 'Without Chain', 'required');
        $this->form_validation->set_rules('with_platinum_chain', 'With Platinum Chain', 'required');
        // $this->form_validation->set_rules('gold_price', 'Gold Price', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/chain/chain', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->chain->insert_item();
            echo $this->session->set_flashdata('msg', 'Chain added successfully!');
            redirect(base_url('admin/chain'));
        }
    }

    // chain page to edit chain
    public function editChain($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $data['title'] = 'Update Chain';
        $data['data'] = $this->chain->find_item_by_id($id);

        // $this->form_validation->set_rules('without_chain', 'Without Chain', 'required');
        $this->form_validation->set_rules('with_platinum_chain', 'With Platinum Chain', 'required');
        // $this->form_validation->set_rules('gold_price', 'Gold Price', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/dashboard_header');
            $this->load->view('admin/chain/chain', $data);
            $this->load->view('admin/templates/dashboard_footer');
        } else {
            $this->chain->update_item($id);
            echo $this->session->set_flashdata('msg', 'Chain updated successfully!');
            redirect(base_url('admin/chain'));
        }
    }

    // delete chain
    public function deleteChain($id)
    {
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect(base_url('admin/'));
        }

        $this->chain->delete_item($id);
        echo $this->session->set_flashdata('msg', 'Chain deleted successfully!');
        redirect(base_url('admin/chain'));
    }
}
