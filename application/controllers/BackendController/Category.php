<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('CategoryModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = $this->CategoryModel->getAllCategories();
        // echo "<pre>";print_r($data);die("g");
        $pageData = ['title' => 'Category List', 'pagename' => 'admin/category/index', 'data' => $data, 'encryption' => $this->encryption];
        $this->load->view("admin/layouts/master", $pageData);
    }

    /**
     * Show Add Category page
     *
     * @return void
     */
    public function create()
    {
        $data['title'] = 'Add Category';
        $data['pagename'] = 'admin/category/create';
        $this->load->view("admin/layouts/master", $data);
    }

    /**
     * Save Category name
     */
    public function save()
    {
        $categoryName = $this->input->post('categoryName');
        $this->form_validation->set_rules('categoryName', 'Category name', 'required|is_unique[categories.category_name]');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');

        if ($this->form_validation->run() == false) {
            $pageData = ['title' => 'Category', 'pagename' => 'admin/category/create'];
            $this->session->set_flashdata('error', validation_errors());

            return redirect('admin/category/create');
        }
        $data = ['category_name' => $categoryName];

        $this->db->insert('categories', $data);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success_msg', 'Category added successfully.');
            return redirect('admin/category');
        } else {
            $pageData = ['title' => 'Category', 'pagename' => 'admin/category/create'];
            $this->session->set_flashdata('error', 'Something went wrong.');

            return redirect('admin/category/create');
        }

    }

    /**
     * Display Edit Category Page
     */
    public function edit($id)
    {
        $id = $this->encryption->decrypt($id);
        if ($id) {
            $data = $this->CategoryModel->getCategoryDetail($id);
            $pageData = ['title' => 'Edit Category', 'pagename' => 'admin/category/edit', 'data' => $data];
            return $this->load->view("admin/layouts/master", $pageData);
        }
        show_404('error_404', false, 'Category Not Found', 'This Category is not found in our system.');
    }

    /**
     * Update category Data
     */
    public function update($id)
    {
        $id = $this->encryption->decrypt($id);
        if ($id) {
            $categoryName = $this->input->post('categoryName');
            $this->form_validation->set_rules('categoryName', 'Category name', 'required|is_unique[categories.category_name]');
            $this->form_validation->set_message('is_unique', 'The %s is already taken');

            if ($this->form_validation->run() == false) {
                $pageData = ['title' => 'Category', 'pagename' => 'admin/category/create'];
                $this->session->set_flashdata('error', validation_errors());

                return redirect('admin/category/edit/'.$this->encryption->encrypt($id));
            }
            $data = ['category_name' => $categoryName];
            $data = $this->CategoryModel->updateCategoryData($id, $data);

            $this->session->set_flashdata('success_msg', 'Category updated successfully.');
            return redirect('admin/category');
        }
        show_404('error_404', false, 'Category Not Found', 'This Category is not found in our system.');
    }
}
