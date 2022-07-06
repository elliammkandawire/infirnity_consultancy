<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    private $table="service";
    private $data=array();
    private $per_page=10;
    private $pagenation=array('8',"10","20","50","100","all");
    private $admin_url="services_admin";
    private $admin_page="dashboard_services";
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

    public function details($slug=null){
        $this->header();
        $this->data["service_details"]=$this->data_model->get_details($this->table,"slug",$slug)[0];
        //getNextOrPrev($table_name,$column_name, $column_value,$order_by, $order_value)

        try{
            $this->data["next"]=!empty($this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")) ? $this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")[0]->slug : "";
            $this->data["prev"]=!empty($this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","DESC")) ? $this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","ASC")[0]->slug : "";
        }catch(Exception $e){

        }
         //$this->data["prev"]=$this->data_model->getNextOrPrev($this->table,"slug",$slug,"date","ASC")[0]->slug;

        $this->load->view('pages/header',$this->data);
        $this->load->view('pages/service-detail');
        $this->load->view('pages/footer');
    }

    public function admin(){
        $ref=null;
        if(isset($_GET['page'])){
            $ref=$_GET['page'];
        }
        if($this->check_if_logged_in()){
            $this->load_page_content($ref);
        }else{
            redirect("login","reflesh");
        }
    }
    public function check_if_logged_in(){
        if($_SESSION['logged_in']){
            return true;
        }else{
            return false;
        }
    }
    public function get_details($slug){
        echo json_encode($this->data_model->get_details($this->table,"slug", $slug)[0]);
        return json_encode($this->data_model->get_details($this->table,"slug", $slug)[0]);
    }


    public function delete($slug){
        $this->data_model->delete($this->table,"slug",$slug);
        echo true;
    }
    public function add(){
        $this->load->library('session');
        if(!$this->check_if_logged_in()){
            redirect("login");
        }
        $data=array(
            "slug"=>$this->removeHtmlTags($this->url($this->input->post("title")).date()),
            "title"=>$this->removeHtmlTags($this->input->post("title")),
            "icon"=>$this->removeHtmlTags($this->input->post("icon")),
            "content"=>nl2br($this->input->post("content")),
            "short_description"=>nl2br($this->input->post("short_description"))
        );

        $this->data_model->insert($this->table,$data);
        $_SESSION['message']="Record Added successfully";

        redirect($this->admin_url);
    }

    function removeHtmlTags($string){
        return strip_tags($string);
    }

    function url($url) {
        $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
        $url = trim($url, "-");
        $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
        $url = strtolower($url);
        $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
        return $url;
    }

    public function update(){
        $this->load->library('session');
        if(!$this->check_if_logged_in()){
            redirect("login");
        }
        $data=array(
            "slug"=>$this->removeHtmlTags($this->input->post("slug")),
            "title"=>$this->removeHtmlTags($this->input->post("title")),
            "icon"=>$this->removeHtmlTags($this->input->post("icon")),
            "content"=>nl2br($this->input->post("content")),
            "short_description"=>nl2br($this->input->post("short_description"))
        );

        //echo json_encode($data);exit;
        $this->data_model->update($this->table,$data);
        $_SESSION['message']="Record Updated successfully";
        redirect($this->admin_url);
    }

    public function load_page_content($ref){
        $this->getData($ref);
        $this->data['pagenation']=$this->pagenation;
        $this->load->view('dashboard/dashboard_header',$this->data);
        $this->load->view('dashboard/'.$this->admin_page);
        $this->load->view('dashboard/dashboard_footer');
    }

    public function getData($ref){
        $all_data=$this->data_model->readData($this->table);
        $this->data['data']=array_slice($all_data, 0,$this->per_page);
        $this->data['page']=$this->per_page;
        if($ref!=null && $ref!="all"){
            $this->data['data']=array_slice($all_data, 0,$ref);
            $this->data['page']=$ref;
        }else if($ref=="all"){
            $this->data['data']=$all_data;
            $this->data['page']=$ref;
        }
    }
}