<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_controller extends CI_Controller {


      public function index() {
        $user = $this->getUserData();
       // echo '<pre>';print_r(date('Y-m-d'));echo '</pre>';
        //echo '<pre>';print_r($this->getFavoriteFood());exit;
        $data = array(
            'username' => $user[0]['username'] ,
            'first_name' => $user[0]['first_name'],
            'last_name' => $user[0]['last_name'],
            'count_orders' => $this->getNumbersOfOrders(),
             'email' => $user[0]['email'],
            // 'favorite_food' =>,  
            'user_since' => $this->userSince($user[0]['created']),
        );
        $this->load->view('templates/head');
        // $this->load->view('templates/navbar');
        $this->load->view('user_view',$data);   
    }

    public function getUserData()    
    {
        return $this->login_model->getUserbyID();
    }

    public function getNumbersOfOrders()
    {
        $orders = $this->home_model->getAllOrders();
        return count($orders);

            
    }

    public function getFavoriteFood()
    {
        
    }

    public function userSince($date) 
    {
        return date("m.d.Y", strtotime($date));  
    }

}?>