<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_Model extends CI_Model
{

	public function login($email,$password)
	{
		$data = array(
			'Email' => $email,
			'Password' => $password
		);
		$query = $this->db->where($data);
		$login = $this->db->get('tbluser');
		if ($login != NULL) {
			return $login->row();
		}
		// echo $this->db->last_query(); // Output the generated SQL query
		// if ($query->num_rows() == 1) {
		// 	$user = $query->row();
		// 	if (password_verify($password, $user->Password)) {
		// 		echo $user->ID;
		// 		return $user->ID; // Return the user ID
		// 	}
		// }
		// echo "Query Result: ";
		// var_dump($query->result()); // Debug statement
		// echo "User ID: ";
		// var_dump($user->ID); // Debug statement
		// exit;

		
	}

}