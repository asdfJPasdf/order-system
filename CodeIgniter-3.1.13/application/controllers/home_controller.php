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
		$data = array(
            'url' => base_url(),
        );
		$this->check_SignIn();
        $this->load->view('templates/head');
        $this->load->view('home_view',$data);
		$this->load->view('order');
		echo '<pre>';print_r($this->home_model->get_active_orders());echo '</pre>';
		
    }

	/**
	 * check the sign in if not sign in send the user back to login
	 */
	public function check_SignIn()
	{
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
		header('Location: '.base_url());
	}


	/**
	 * Get all order with the status active
	 */
	public function get_active_orders()
	{
		
	}
	
	/**
	 * get all 5 with the status old
	 */
	public function get_old_orders()
	{
		
	}

}