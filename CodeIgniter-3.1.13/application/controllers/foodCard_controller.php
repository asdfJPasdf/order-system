<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class foodCard_Controller extends CI_Controller
{


    public function index() {
        $nav = array(
            'url' => base_url(),
            'total'=>0,
             
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
        if(isset($this->session->cart)){
            $orders = $this->session->cart;
            if(isset($orders[$id])){
                $number = $orders[$id]+1;
                array_push($orders,$id,$number);
            }
        }
        else{

            $orders = array($id => 1);
        }
        
        $this->session->set_userdata('cart', $orders);
        header('Location: '.base_url().'food');
    }

}
?>