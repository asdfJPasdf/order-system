<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class foodCard_Controller extends CI_Controller
{


    public function index() {

        $data = array(
            'foods'=>$this->addToArrays(),
        );
        
       //echo '<pre>';print_r($this->addToArrays());exit;
        $this->load->view('templates/head');
        $this->load->view('foodCard', $data);
    }

    public function addToArrays()
    {
        $categories = $this->foodCard_model->getAllCategories();
        $products =$this->foodCard_model->getProducts();
        
        $arrayResult= array();
        foreach($products as $product) {
            $key = $product['product_category_id'];
            
            foreach($categories as $categorie){
                
                if($key == $categorie['product_category_id']){
                    
                    if(isset($arrayResult[$key])){
                        $arrayResult[$key]['products'] =  $product;
                        
                       
                    }
                    else{
                        $arrayResult[$key] =  $categorie;
                        $arrayResult[$key]['products'] =  $product;
                        
                    }
                }
                
            }

            
        }
        return $arrayResult;
    }

}
?>