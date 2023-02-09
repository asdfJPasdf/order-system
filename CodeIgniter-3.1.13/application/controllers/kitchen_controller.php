<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kitchen_controller extends CI_Controller {


     
function __construct() {
	parent::__construct();
    $this->load->helper('url');
}

  public function index() {

		$user = $this->login_model->getUserbyID($this->session->user_id);
        $this->checkUserRole($user);
		$data = array(
           'url' => base_url(),
		   'total'=>0, 
		   'username' => $user[0]['username'],
           'isChef' => $user[0]['role'] == 'chef',
           'address' => $user[0]['address'],
        );

        $orders = array(
           'orders' => $this->sortArray($this->kitchen_model->getAllactiveOrders()),
           'controller' => $this,
           'label' => 'offen',
           'open' => TRUE,
        );

        $progress = array(
            'orders' => $this->sortArray($this->kitchen_model->getAllInProgressOrders()),
            'label' => 'in Bearbeitung',
            'open' => FALSE,
        );

        $this->load->view('templates/head');
		$this->load->view('templates/navbar',$data);
        $this->load->view('orders_kitchen',$orders);
        $this->load->view('orders_kitchen', $progress);

    }


    public function checkUserRole($user){
        if($user[0]['role'] == 'user'){
			header('Location: '.base_url());
        }
    }

    public function sortArray($array){
        
        $sortetArray = array();
         foreach ($array as $item) {
        if (!isset($sortetArray[$item['orders_id']])) {
            $sortetArray[$item['orders_id']] = array();
        }

        $sortetArray[$item['orders_id']][] = $item;
    }
    return $sortetArray;
    }

    public function calcTime($time){
        $timeOnly = date_format(date_create($time), "H.i");
        $timeCreated = new DateTime($time);
        $dateNow =  new DateTime(date('Y-m-d H:i:s'));
        $timeDiff = $timeCreated->diff($dateNow);

        return array($timeOnly, $timeDiff->h, $timeDiff->i);
    }

    public function changeStatus($id, $status){

        $this->kitchen_model->changeStatus($id, $status);
		header('Location: '.base_url().'kitchen');

    }
    public function showDelivery($table, $address){
        
        if($table == 0){
            return "Lieferung nach: ".$user[0]['address'];
        }
        else{
            return "An Tischnummer: ".$table;
        }

    }


}