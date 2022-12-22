<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    public function get_users($username) {
        
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->result();
    }

    public function addUser($first_name,$last_name,$username,$password,$salt,$email)
    {
        $data_user = array(
			'first_name' => $first_name,
			'last_name'  => $last_name,
			'password' => $password,
			'username'	=>	$username,
			'salt' => $salt,
			'email' => $email,
            'role' => 'user',
		);

	$query_task = $this->db->insert('user',$data_user);
    return array($query_task);
    }

}
