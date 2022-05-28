<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    public function index()
    {
        $this->load->view('pages/header');
        $this->load->view('pages/services');
        $this->load->view('pages/footer');
    }
}