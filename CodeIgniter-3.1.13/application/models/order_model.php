
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {


    public function sendOrder($user_id,$product_id,$number,$order_id,$isfirst, $table)
    {
        if($isfirst){
        //insert into table order
        $order = array(
            'user_id' => $user_id,
            'status' => 'active',
            'table' =>  $table,
            'created' => date("Y-m-d H:i:s"),
        );
        $querry_order = $this->db->insert('orders', $order);
    }
        if($order_id == 0) {
            $order_id = $this->db->insert_id();
        }
        $product_order = array(
            'orders_id' => $order_id,
            'product_id' => $product_id,
            'number' => $number,
        );
        $querry_productOrder = $this->db->insert('product_order', $product_order);

        if(!isset($querry_order)){
            $querry_order = TRUE;
        }
        return array($querry_order, $querry_productOrder,$order_id);
    }

}