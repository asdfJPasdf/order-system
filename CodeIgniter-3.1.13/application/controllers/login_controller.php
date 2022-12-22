<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_controller extends CI_Controller {

function __construct() {
	parent::__construct();
    $this->load->helper('url');
}

  public function index() {

        $data = array(
            
        );
        $this->load->view('templates/head');

        $this->form_validation->set_rules('username', 'Benutzername', 'required');
        $this->form_validation->set_rules('password', 'Passwort', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login_view', $data);
        }
       
    }

    public function check_login(){
        $inputPassword = $this->input->post('password');

        $user = $this->login_model->get_users($this->input->post('username'));


                if($this->chechPassword($inputPassword,$user[0]->salt) == $user[0]->password){
                    header('Location: '.base_url());
                }
                else{
                    header('Location: '.base_url().'index.php/login');
                }
        
    }   
    public function chechPassword($pw, $salt)
    {
        return hash('sha256',$pw.$salt);
    }

    public function samePasswort()
    {
        if($this->input->post('password') == $this->input->post('confirm_password')){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function genrateHash($pw)
    {
        $salt = hash('sha256', rand());
        $hash = hash('sha256',$pw.$salt);

        return array(
            'salt' => $salt,
            'password' => $hash
        );
    }

    public function signup(){
        $this->load->view('templates/head');
        $this->load->view('signup_view');
    }

    public function newUser(){
        
        if($this->samePasswort()){
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $password = $this->genrateHash($this->input->post('password'));
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $this->login_model->addUser($first_name,$last_name,$username, $password['password'],$password['salt'],$email);
        header('Location:'.base_url().'index.php/login');

        }

        else{
            header('Location:'.base_url().'index.php/login/singup');
        }
    }

}
