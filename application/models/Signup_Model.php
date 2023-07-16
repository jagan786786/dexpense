<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_Model extends CI_Model
{


    public function signup($fname, $emailid, $mobno, $password)
    {
        $data = array(
            'FullName' => $fname,
            'Email' => $emailid,
            'MobileNumber' => $mobno,
            'Password' => $password
        );
        $query = $this->db->insert('tbluser', $data);
        if ($query) {
            $this->session->set_flashdata('success_msg', 'Registration successfull, Now you can login.');
            redirect('Signup/signup');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            redirect('Signup/signup');
        }

    }

}