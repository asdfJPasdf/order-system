<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cart_Controller extends CI_Controller
{

        public function index() {

            $user = $this->login_model->getUserbyID();
            $nav = array(
                'url' => base_url(),
                'username' => $user[0]['username'], 
            );
            $data = array(
                'url' =>  base_url(),
                'products' => $this->cartEntry(),
                'whole_price' => $this->calcPrice(),
                'number' => $this->countItems(),

            );
    
            $this->load->view('templates/head');
            $this->load->view('templates/navbar', $nav);
            $this->load->view('shoppingCart',$data);
            $this->cartEntry();
       }

       /**
        * Return an array with whole product and number of the products
        */
       public function cartEntry()
       {
        
        if(isset($this->session->cart)) {
            $fullCard = array();
            $cart = $this->session->cart;
            foreach($cart as $key => $value){

                $cardtext = $this->foodCard_model->getProductByID($key);
                $number = array('number' => $value);
                $combine = array_merge($cardtext[0],$number);
                array_push($fullCard,$combine);
            }
            return $fullCard;
        }
       }
    
       public function calcPrice() 
       {
            $carts = $this->cartEntry();
            $price = 0;
            foreach($carts as $cart){
                $price += $cart['product_price'];
            }         
            return $price; 
       }

       public function countItems()
       {
            return count($this->cartEntry());
        }


        public function sendOrder()
        {
            $cart = $this->session->cart;
            $user_id = $this->session->user_id;
            foreach($cart as $key => $value) {
                $this->order_model->sendOrder($user_id,$key,$value);     
            }
            
            $this->session->unset_userdata('cart');

            header('Location: '.base_url().'food');
        }
}