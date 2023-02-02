<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cart_Controller extends CI_Controller
{
        public function index() {
            $nav = array(
                'url' => base_url(),
                'username' => $user[0]['username'], 
            );
    
            $this->load->view('templates/head');
            $this->load->view('templates/navbar', $nav);
    }


}