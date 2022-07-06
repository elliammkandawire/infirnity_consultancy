<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    private $per_page=8;
    private $pagenation=array('8',"10","20","50","100","all");
    private $admin_url="team_admin";
    private $table="team";
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
        $data['company_details']=($this->home_model->company_data()[0]);
        $data["teams"]=$this->data_model->readData($this->table);
        $data["services"]=$this->data_model->readData("service");
        $data["news"]=$this->data_model->readData("news");
        $data["location"]="team";
        $this->load->view('pages/header',$data);
        $this->load->view('pages/team');
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
        echo json_encode($this->data_model->get_details($this->table,"id", $slug)[0]);
        return json_encode($this->data_model->get_details($this->table,"id", $slug)[0]);
    }


    public function delete($slug){
        $this->data_model->delete($this->table,"id",$slug);
        echo true;
    }
    public function add(){
        $this->load->library('session');
        if(!$this->check_if_logged_in()){
            redirect("login");
        }
        $data=array(
            "fullname"=>$this->removeHtmlTags($this->input->post("fullname")),
            "position"=>$this->removeHtmlTags($this->input->post("position")),
            "email"=>$this->removeHtmlTags($this->input->post("email")),
            "twitter_link"=>$this->removeHtmlTags($this->input->post("twitter_link")),
            "facebook_link"=>$this->removeHtmlTags($this->input->post("facebook_link")),
            "status"=>$this->removeHtmlTags($this->input->post("status")),
            "picture"=>$this->removeHtmlTags($this->input->post("current_picture"))
        );
        /*check if picture is empty*/
        if ($_FILES['picture']['error']!=4) {
            $file_name=$this->do_upload("./images/team","picture")['upload_data']['file_name'];
            $data['picture']=$file_name;
        }

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
            "id"=>$this->removeHtmlTags($this->input->post("id")),
            "fullname"=>$this->removeHtmlTags($this->input->post("fullname")),
            "position"=>$this->removeHtmlTags($this->input->post("position")),
            "email"=>$this->removeHtmlTags($this->input->post("email")),
            "twitter_link"=>$this->removeHtmlTags($this->input->post("twitter_link")),
            "facebook_link"=>$this->removeHtmlTags($this->input->post("facebook_link")),
            "status"=>$this->removeHtmlTags($this->input->post("status")),
            "picture"=>$this->removeHtmlTags($this->input->post("current_picture"))
        );

        /*check if picture is empty*/
        if ($_FILES['picture']['error']!=4) {
            $file_name=$this->do_upload("./images/team","picture")['upload_data']['file_name'];
            $data['picture']=$file_name;
        }

        //echo json_encode($data);exit;
        $this->data_model->update($this->table,$data);
        $_SESSION['message']="Record Updated successfully";
        redirect($this->admin_url);
    }

    public function load_page_content($ref){
        $this->getData($ref);
        $this->data['pagenation']=$this->pagenation;
        $this->load->view('dashboard/dashboard_header',$this->data);
        $this->load->view('dashboard/dashboard_team');
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
    public function do_upload($location,$file)
    {
        $config['upload_path']          = $location;
        $config['allowed_types']        = 'pdf|gif|jpg|png|jpeg|mp3|mpeg';
        // $config['max_size']             = 1000;
        // $config['max_width']            = 1600;
        // $config['max_height']           = 768;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($file))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }
}