<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cart_Controller extends CI_Controller
{

        public function index() {
            
            $user = $this->login_model->getUserbyID();
            $nav = array(
                'url' => base_url(),
                'username' => $user[0]['username'],
                'isChef' => $user[0]['role'] == 'chef',
                
            );
            $data = array(
                'url' =>  base_url(),
                'products' => $this->cartEntry(),
                'whole_price' => $this->calcPrice(),
                'number' => $this->countItems(),
                'delivery' => $this->session->delivery,
                'table' => $this->session->table,
                'address' => $user[0]['address'],

            );

		    $alert = array(
			    'alert' => $this->session->alert,
		    );

            $this->load->view('templates/head');
            $this->load->view('templates/navbar', $nav);
            $this->load->view('alert', $alert);
            $this->load->view('shoppingCart',$data);
        
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
            
        if(!empty($carts)){
            foreach($carts as $cart){
                $price += $cart['product_price']* $cart['number'];
            }         
            return $price; 
        }
       }

       public function countItems()
       {
       $items =  $this->cartEntry();
       $count = 0;
        if( !empty($this->cartEntry())){
            foreach($items as $item) {
                $count += $item['number'];
            }
            return $count;
        }
        }


        public function sendOrder()
        {
            $cart = $this->session->cart;
            $user_id = $this->session->user_id;
            $table = isset($this->session->table)? $this->session->table :0;
            $order_id = 0;
            $isFirst = TRUE;
            foreach($cart as $key => $value) {
                $insert = $this->order_model->sendOrder($user_id,$key,$value,$order_id, $isFirst, $table);
                $order_id = $insert[2];
                $isFirst = FALSE;

            }
            
            $this->session->unset_userdata('cart');
            $this->session->set_flashdata('alert', 1);
            header('Location: '.base_url());
        }
        
        public function changeNumber($id){

            $new = array($id => $this->input->post('number'));
            $this->session->cart = array_replace($this->session->cart,$new);
            header('Location: '.base_url().'cart');

        }

        public function removeItem($id){

            $cart = $this->session->cart;
            unset($cart[$id]);
            $this->session->cart = $cart;
            $this->session->set_flashdata('alert', 3);
            header('Location: '.base_url().'cart');
        }

        public function deliveryOrder(){

            $delivery = $this->input->post('delivery');
            $this->session->delivery = $delivery;
            header('Location: '.base_url().'cart');

        }

        public function addTableNumber(){
                        
            $table = $this->input->post('table');
            $this->session->table = $table;
            header('Location: '.base_url().'cart');
        }
}