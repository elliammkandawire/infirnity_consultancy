<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    private $table="service";
    private $data=array();
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('home_model');
        $this->load->library('session');
        $this->load->model('data_model');
    }
    public function index()
    {
        $this->header();
        $this->load->view('pages/header',$this->data);
        $this->load->view('pages/services');
        $this->load->view('pages/footer');
    }
    public function header(){
        $this->data['company_details']=($this->home_model->company_data()[0]);
        $this->data["services"]=$this->data_model->readData("service");
        $this->data["news"]=$this->data_model->readData("news");
        $this->data["location"]="services";
    }
}