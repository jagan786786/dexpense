<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Changepassword extends CI_Controller
{
    // Validating login
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('uid'))
            redirect('login');
        
        // Load required libraries and model
        $this->load->library('form_validation');
        $this->load->model('Changepassword_Model');
    }
	

    public function changepassword()
    {
        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmpassword', 'Confirm New Password', 'required|matches[newpassword]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        if ($this->form_validation->run() == false) {
            // Form validation failed, reload the change password view with error messages
            $this->load->view('change-password.php');
        } else {
            // Form validation passed, proceed with password update
            $currentpassword = $this->input->post('currentpassword');
            $newpassword = $this->input->post('newpassword');
            $uid = $this->session->userdata('uid');

            // Retrieve the current password from the database
            $user = $this->Changepassword_Model->getUserById($uid);
            // Compare the hashed current password from the database with the inputted current password
            if ($user) {
				if (password_verify($currentpassword, $user->Password)){
                // Hash the new password before updating it in the database
                // $newpassword_hashed = password_hash($newpassword, PASSWORD_DEFAULT);
                $this->Changepassword_Model->updatePassword($uid);

                $this->session->set_flashdata('success', 'Password changed successfully');
                redirect('Changepassword/changepassword');
            } else {
                $this->session->set_flashdata('error', 'Current Password is wrong');
                redirect('Changepassword/changepassword');
            }
        }
    }
}
}