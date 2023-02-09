<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kitchen_model extends CI_Model {

    public function getAllactiveOrders(){

		return $this->db->query("
		Select orders.*, product.product_name, product_order.number from orders,product,product_order
		where product_order.orders_id = orders.orders_id
		AND orders.status = 'active'
		AND  product_order.product_id = product.product_id;
		")->result_array();
		// $this->db->from('orders');
		// $this->db->join('product_order', 'orders.orders_id = product_order.orders_id', 'left');
		// return $this->db->get()->result_array();
    }


	public function changeStatus($id){
		$status = array(
			'status' => 'old',
		);

		$this->db->where('orders_id', $id);
		$this->db->update('orders', $status);
	}
}
