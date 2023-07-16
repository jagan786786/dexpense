<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        /*call CodeIgniter's default Constructor*/
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database(); // Load the database library
        $this->load->model('Login_Model'); // Load the login model

    }
    public function loginUser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {

            $this->load->view('login');
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('Login_Model');
            $user = $this->Login_Model->login($email, $password);
            // echo "User ID: ";
            // var_dump($user); // Debug statement
            // exit;
            if ($user !== null) {
                // User login successful
                $this->session->set_userdata('uid',  $user->ID);
                $this->session->set_userdata('fname',   $user->FullName);
                redirect('Dashboard/dashboard'); // Redirect to the dashboard or desired page
            } else {
                echo ("data is not matched");
                // Invalid login credentials
                $this->session->set_flashdata('error', 'Invalid login details. Please try again.');
                redirect('Login/loginUser');
            }
        }
    }
    function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}