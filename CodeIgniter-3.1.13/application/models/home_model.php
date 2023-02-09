<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {
	/**
	 * Get all order with the status active
	 */
function get_ordersbyStatus($status)
	{  
		return $this->db->query("
		Select orders.*, product.product_name, product.product_price, product_order.number from orders,product,product_order
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
		$this->db->select('product_order.product_id');
		$this->db->select('product_order.number');
		$this->db->from('orders');
		$this->db->join('product_order', 'orders.orders_id = product_order.orders_id', 'left');
		$this->db->where('orders.user_id', $this->session->user_id);
		return $this->db->get()->result_array();
	}

	public function getNumOrders(){

		$this->db->from('orders');
		$this->db->where('orders.user_id', $this->session->user_id);
		return $this->db->get()->result_array();
	}
}