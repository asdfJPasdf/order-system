<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class foodCard_Controller extends CI_Controller
{


    public function index() {
        
		$user = $this->login_model->getUserbyID($this->session->user_id);
        $nav = array(
            'url' => base_url(),
            'username' => $user[0]['username'], 
         );
        $data = array(
            'foods'=>$this->addToArrays(),
            'colums'=> 3,
            'controller' => $this,
        );
        
        $this->load->view('templates/head');
        $this->load->view('templates/navbar', $nav);
        $this->load->view('foodCard', $data);
    }

    public function addToArrays()
    {
        $id = 0;
        $categories = $this->foodCard_model->getAllCategories();
        $products =$this->foodCard_model->getProducts();
        
        $arrayResult= array();
        foreach($products as $product) {
            $key = $product['product_category_id'];
            
            foreach($categories as $categorie){
                
                if($key == $categorie['product_category_id']){
                    
                    if(isset($arrayResult[$key])){
                        $arrayResult[$key]['products'][$id]=  $product;
                        $id++;
                       
                    }
                    else{
                        $arrayResult[$key] =  $categorie;
                        $arrayResult[$key]['products'][$id] =  $product;
                        $id++;
                    }
                }
                
            }

            
        }
        return $arrayResult;
    }

    /**
     * Add item to cart
     * check if if cart isset and check if the same order ordered several times
     */
    public function addToCart($id)         
    {
        
       //echo '<pre>';print_r($id);echo '</pre>';
        if(isset($this->session->cart)){
            $orders = $this->session->cart;
            //echo '<pre>';print_r($orders);exit;
            if(isset($orders[$id])){
                //echo '<pre>';print_r($orders);echo '</pre>';
                //echo '<pre>';print_r($orders[$id]+1);exit;
                $number = $orders[$id]+1;
                //echo '<pre>';print_r($number);echo '</pre>';
                
                $test = array($id => $number);
                $result = array_merge($orders,$test);
              // echo '<pre>';print_r($orders);exit;
            }
            else{
                $element= array($id => 1);
                $result = array_merge($orders,$element);
            }
        }
        else{

            $result = array($id => 1);
           
           // echo '<pre>';print_r($orders);exit;
        }
        
        $this->session->set_userdata('cart', $result);
      echo '<pre>';print_r($this->session->all_userdata());exit;
      //$this->session->unset_userdata('cart');
       
        header('Location: '.base_url().'food');
    }

}
?>