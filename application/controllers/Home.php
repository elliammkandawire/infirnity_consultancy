<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        $data["services"]=$this->data_model->readData("service");
        $data["clients"]=$this->data_model->readData("clients");
        $data["slider"]=$this->data_model->readData("slider");
        $data["basic_statistics"]=$this->data_model->readData("basic_stastics")[0];
        $data["location"]="home";
        $data["news"]=$this->data_model->readData("news");
		$this->load->view('pages/header',$data);
		$this->load->view('pages/index');
		$this->load->view('pages/footer');
	}

    public function dashboard(){
        $this->data['company_details']=($this->home_model->company_data()[0]);
        $this->load->view('dashboard/dashboard_header',$this->data);
        $this->load->view('dashboard/dashboard');
        $this->load->view('dashboard/dashboard_footer');
    }

    public function update_company(){
        if(!isset($_SESSION['logged_in'])){
            redirect("login");
        }
        $data=array(
            "shortname"=>$this->input->post("shortname"),
            "fullname"=>$this->input->post("fullname"),
            "location"=>$this->input->post("location"),
            "background"=>nl2br($this->input->post("background")),
            "email"=>$this->input->post("email"),
            "cell"=>$this->input->post("phone"),
            "facebook_link"=>$this->input->post("facebook_link"),
            "vision"=>nl2br($this->input->post("vision")),
            "twitter_link"=>$this->input->post("twitter_link"),
            "mission"=>nl2br($this->input->post("mission")),
            "address"=>nl2br($this->input->post("address")),
            "logo"=>$this->input->post("current_logo"),
            "core_values"=>nl2br($this->input->post("core_values"))
        );
        /*check if logo is empty*/
        if ($_FILES['logo']['error']!=4) {
            $file_name=$this->do_upload("./images","logo")['upload_data']['file_name'];
            $data['logo']=$file_name;
        }

        $this->home_model->update($data);
        $_SESSION['message']="Record inserted successfully";
        redirect("dashboard");
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
