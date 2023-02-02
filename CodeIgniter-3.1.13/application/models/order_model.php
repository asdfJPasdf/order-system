
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model extends CI_Model {


    public function sendOrder($user_id,$product_id,$number)
    {
        //insert into table order
        $order = array(
            'user_id' => $user_id,
            'status' => 'active',
        );
        $querry_order = $this->db->insert('orders', $order);


        $order_id = $this->db->insert_id();
        $product_order = array(
            'orders_id' => $order_id,
            'product_id' => $product_id,
            'number' => $number,
        );
        $querry_productOrder = $this->db->insert('product_order', $product_order);

        return array($querry_order, $querry_productOrder);
    }

}