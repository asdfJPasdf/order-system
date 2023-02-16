<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_controller extends CI_Controller {

function __construct() {
	parent::__construct();
    $this->load->helper('url');
}

  public function index() {

        $alert = array(
            'alert' => $this->session->alert,
            
        );
        $this->load->view('templates/head');
        $this->load->view('alert', $alert);

        $this->form_validation->set_rules('username', 'Benutzername', 'required');
        $this->form_validation->set_rules('password', 'Passwort', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login_view');
        }
       
    }

    public function check_login(){
        $inputPassword = $this->input->post('password');

        $user = $this->login_model->get_users($this->input->post('username'));


                if($this->checkPassword($inputPassword/*,$user[0]->salt*/) == $user[0]->password){
                    $id = $user[0]->id_user;
                    $this->session->set_userdata('user_id', $id);
                    header('Location: '.base_url());
                }
                else{
                    $this->session->set_flashdata('alert',4);
                    header('Location: '.base_url().'login');
                }
        
    }  

    public function checkPassword($pw, /*$salt*/)
    {
    return md5($pw/*.$salt*/);
    }

    public function samePasswort()
    {
        return $this->input->post('password') == $this->input->post('confirm_password');
        
    }

    public function getSalt()
    {
        return md5(rand());
    }

       

    public function signup(){
        $this->load->view('templates/head');
        $this->load->view('signup_view');
    }

    public function newUser(){
        
        if($this->samePasswort()){
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $address = $this->input->post('address');
        // $salt = $this->getSalt();
        // $this->session->set_userdata('salt',$salt);
            $password = $this->checkPassword($this->input->post('password'));
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $this->login_model->addUser($first_name,$last_name,$username, $password,$email, $address);
            header('Location:'.base_url().'login');

        }

        else{
            header('Location:'.base_url().'login/singup');
        }
    }

}
