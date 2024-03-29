<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user_controller extends CI_Controller {


      public function index() {
        $user = $this->getUserData();
        $data = array(
            'username' => $user[0]['username'] ,
            'first_name' => $user[0]['first_name'],
            'last_name' => $user[0]['last_name'],
            'count_orders' => $this->getNumbersOfOrders(),
            'email' => $user[0]['email'],
            'favorite_food' => $this->getFavoriteFood(),  
            'user_since' => $this->userSince($user[0]['created']),
        );
         $nav = array(
            'url' => base_url(),
            'username' => $user[0]['username'],
            'isChef' => $user[0]['role'] == 'chef',
        ); 
        $this->load->view('templates/head');
        $this->load->view('templates/navbar',$nav);
        $this->load->view('user_view',$data);   
    }

    public function getUserData()    
    {
        return $this->login_model->getUserbyID();
    }

    public function getNumbersOfOrders()
    {
        
        $orders = $this->home_model->getNumOrders();
        return count($orders);

            
    }

    public function getFavoriteFood()
    {
    
      $array =  $this->home_model->getAllOrders(); 
      $result = array();
      foreach($array as $a) {
        if(gettype($a['product_id']) == 'integer' ) {
            for($i = 1; $i <= $a['number']; $i++){
                array_push($result,$a['product_id']);
            }
        }
      }
      $max = max(array_count_values($result));
      $idfav =   array_search($max,array_count_values($result));
      $favFood = $this->foodCard_model->getProductByID($idfav);
      return $favFood[0]['product_name'];
    }

    public function userSince($date) 
    {
        return date("m.d.Y", strtotime($date));  
    }

}?>