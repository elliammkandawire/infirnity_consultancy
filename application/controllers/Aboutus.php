<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('session');
        $this->load->model('data_model');
    }
    public function index()
    {
        $data['company_details']=($this->home_model->company_data()[0]);
        $data["clients"]=$this->data_model->readData("clients");
        $data["teams"]=$this->data_model->readData("team");
        $data["services"]=$this->data_model->readData("service");
        $data["location"]="about_us";
        $data["news"]=$this->data_model->readData("news");
        $this->load->view('pages/header',$data);
        $this->load->view('pages/aboutus');
        $this->load->view('pages/footer');
    }
}