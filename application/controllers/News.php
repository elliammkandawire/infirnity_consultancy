<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    private $table="news";
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
        $this->load->view('pages/news');
        $this->load->view('pages/footer');
    }

    public function header(){
        $this->data['company_details']=($this->home_model->company_data()[0]);
        $this->data["news"]=$this->data_model->readData("news");
        $this->data["services"]=$this->data_model->readData("service");
        $this->data["location"]="news";
    }

    public function news_details($slug=null){
        $this->header();
        $this->data["news_details"]=$this->data_model->get_details($this->table,"slug",$slug)[0];
        $this->data["next"]=!empty($this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")) ? $this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")[0]->slug : "";
        $this->data["prev"]=!empty($this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")) ? $this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","ASC")[0]->slug : "";
        $this->load->view('pages/header',$this->data);
        $this->load->view('pages/news-detail');
        $this->load->view('pages/footer');
    }
}