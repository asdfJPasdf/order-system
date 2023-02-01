<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
	/**
	 * Get all order with the status active
	 */
	function get_active_orders($status)
	{  
        // //echo '<pre>';print_r($this->session->all_userdata());exit;
		// $this->db->select('orders.*, product.product_name, product.product_price');
        // $this->db->where('user_id', $this->session->user_id);
        // $this->db->where('status', 'active');
		// //$this->db->where('product_order.orders_id','orders.orders_id');
		// $this->db->where('product_order.product_id','product.product_id');
		// $query = $this->db->get('orders, product, product_order');
        // return $query->result();


		return $this->db->query("
		Select orders.*, product.product_name, product.product_price from orders,product,product_order
		where product_order.orders_id = orders.orders_id
		AND orders.status = '".$status."'
		AND orders.user_id = ".$this->session->user_id."
		AND  product_order.product_id = product.product_id;
		")->result_array();
	}
	
	/**
	 * get all 5 with the status old
	 */
	function get_old_orders()
	{
        $this->db->where('user_id', $this->session->user_id);
		$this->db->where('status', 'old');
		$query = $this->db->get('orders');
        return $query->result();
	}

	public function getAllOrders()
	{
        $this->db->where('user_id', $this->session->user_id);
		//$this->db->join('product', 'orders.product_order_id = product_order.orders_id');
		//$this->db->join('product', 'orders.product = product.product_id');	
		$query = $this->db->get('orders');
        return $query->result();
	}
}