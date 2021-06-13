<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function index() {
        $this->load->view('login');
    }

    public function register() {
        $this->load->view('signup');
    }

    public function collections() {
        $this->load->view('collections');
    }

    public function resources() {
        $this->load->view('resources');
    }

    public function landing() {
        $this->load->view('landing');
    }
}

?>