<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Changepassword_Model extends CI_Model
{
       public function updatePassword($uid, $newPassword)
       {
           $this->db->where('ID', $uid);
           $this->db->update('tbluser', array('Password' => $newPassword));
       }
   
       public function getUserById($uid)
       {
           $this->db->where('ID', $uid);
           $query = $this->db->get('tbluser');
           return $query->row();
       }
       // For getting current password
       
}