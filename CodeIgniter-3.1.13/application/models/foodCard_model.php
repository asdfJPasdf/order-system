<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class foodCard_model extends CI_Model {

    /**
     * Get all product categories from table product categories
     */
    public function getAllCategories()
    {
        return $this->db->get('product_category')->result_array();
    }

    /**
     * Get all product from table products
     */
    public function getProducts()
    {   
        return $this->db->get('product')->result_array();
    }
}?>