<?php

defined('BASEPATH') or exit('No direct script access allowed');
class LoginCOntroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in')) {
            return redirect('/admin');
        }
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['title'] = ucfirst('Login');
        return $this->load->view('admin/auth/login', $data);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    public function authenticated()
    {
        echo $username = $this->input->post('email');
        echo $password = $this->input->post('password');

        if ($this->login_model->login($username, $password)) {
            redirect('admin/dashboard');
        } else {
            // Login failed
            $this->session->set_flashdata('error_msg', 'Invalid username or password.');
            redirect('login');
        }
        die();
        if ($user->status == 'Inactive') {
            // Log the user out.
            $this->logout($request);
            // Return them to the log in form.
            setFlashMessage(__('message.login.inactive_account'), 'error');

            return redirect()->back()->with([
                'message' => __('Project Added Successfully.')]);
        }

        return redirect()->route('home');
    }
}
