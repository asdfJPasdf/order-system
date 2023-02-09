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
    }

    public function getAllInProgressOrders(){

		return $this->db->query("
		Select orders.*, product.product_name, product_order.number from orders,product,product_order
		where product_order.orders_id = orders.orders_id
		AND orders.status = 'inprogress'  
		AND  product_order.product_id = product.product_id;
		
		")->result_array();
    }

	public function changeStatus($id, $status){
		$status = array(
			'status' => $status,
		);

		$this->db->where('orders_id', $id);
		$this->db->update('orders', $status);
	}
}
