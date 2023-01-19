<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
	/**
	 * Get all order with the status active
	 */
	function get_active_orders()
	{  
        //echo '<pre>';print_r($this->session->all_userdata());exit;
        $this->db->where('user_id', $this->session->user_id);
        $this->db->where('status', 'active');
		$query = $this->db->get('order');
        return $query->result();
	}
	
	/**
	 * get all 5 with the status old
	 */
	function get_old_orders()
	{
        $this->db->where('user_id', $this->session->user_id);
		$this->db->where('status', 'old');
		$query = $this->db->get('order');
        return $query->result();
	}
}