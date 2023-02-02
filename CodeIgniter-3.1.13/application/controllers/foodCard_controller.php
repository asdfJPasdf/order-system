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
        $cart = $this->session->userdata('cart');
        if (!isset($cart[$id])) {
            $cart[$id] = 1;
        }

        else {
            $cart[$id]++;
        }

        $this->session->set_userdata('cart', $cart);
 
        header('Location: '.base_url().'food');
    }

}
?>