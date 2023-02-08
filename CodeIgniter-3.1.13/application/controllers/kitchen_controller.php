<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kitchen_controller extends CI_Controller {


     
function __construct() {
	parent::__construct();
    $this->load->helper('url');
}

  public function index() {

    echo '<pre>';print_r($this->kitchen_model->getAllactiveOrders());exit;
		$user = $this->login_model->getUserbyID($this->session->user_id);
        $this->checkUserRole($user);
		$data = array(
           'url' => base_url(),
		   'total'=>0, 
		   'username' => $user[0]['username'],
			
        );

        $this->load->view('templates/head');
		$this->load->view('templates/navbar',$data);


    }


    public function checkUserRole($user){
        if($user[0]['role'] == 'user'){
			header('Location: '.base_url());
        }
    }




}