<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_controller extends CI_Controller
{


	function __construct() {
		parent::__construct();
        $this->load->helper('url');
	}

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home_controller
	 *	- or -
	 * 		http://example.com/index.php/home_controller/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/task_controller/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function index() {
	
	
		
		$this->check_SignIn();
		if(isset($this->session->user_id)){
		$user = $this->login_model->getUserbyID($this->session->user_id);
		$data = array(
           'url' => base_url(),
		   'total'=>0, 
		   'username' => $user[0]['username'],
			'isChef' => $user[0]['role'] == 'chef',


			
        );
		$activ = array(
			'orders'=>$this->get_orders("active"),
			'status'=> 'aktive',
		);
		$old = array(
			'orders'=>$this->get_orders("old"),
			'status'=>'alte'
		);

		$progress = array(
			'orders' => $this->get_orders("inprogress"),
			'status' => 'bearbeitete',

		);
		$alert = array(
			'alert' => $this->session->alert,
		);
		
		
        $this->load->view('templates/head');
		$this->load->view('templates/navbar',$data);
		$this->load->view('alert', $alert);
		$this->load->view('home_view',$data);
		$this->load->view('order',$activ);
		$this->load->view('order', $progress);
		$this->load->view('order',$old);
	}		
		
    }

	/**
	 * check the sign in if not sign in send the user back to login
	 */
	public function check_SignIn()
	{ 
		//echo '<pre>';print_r(!isset($this->session->user_id));exit;
		//$this->session->unset_userdata('user_id');
		// echo '<pre>';print_r($this->session->all_userdata());exit;
		if(!isset($this->session->user_id)){
			
			header('Location: '.base_url().'login');
		}
	}

	/**
	 * Logout the user
	 */
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		header('Location: '.base_url().'login');
	}


	/**
	 * Get all order with the status 
	 */
	public function get_orders($status)
	{

			
		$orders = $this->home_model->get_ordersbyStatus($status);
		
		$sortet_orders = array();
		foreach($orders as $order){
			$key = $order['orders_id'];
			if (!isset($sortet_orders[$key])) {
				$sortet_orders[$key] = array();
			}
			$sortet_orders[$key][] = $order;
		}

		return $sortet_orders;
	}
	


}