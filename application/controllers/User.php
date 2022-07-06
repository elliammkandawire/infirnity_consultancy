<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		//echo "Iam here ";exit;
		if($this->session->userdata('user')){
			if($this->session->userdata('role')==1){
				redirect("dashboard");
			}else{
				redirect("dashboard");
			}
		}
		else{
			$this->load->view('dashboard/login');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = sha1($_POST['password']);


		$data = $this->users_model->login($email, $password);
		if($data){
		    $data=$data[0];
			$this->session->set_userdata('user', $data->email);
			$this->session->set_userdata('fname', $data->fname);
			$this->session->set_userdata('role', $data->role);
			$this->session->set_userdata('logged_in', true);

			//var_dump($data);exit;
			redirect("dashboard");
		}
		else{
			//header('location:'.$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
			$this->load->view('dashboard/login');
		}
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user') && $this->session->userdata('user')!=""){
			$this->load->view('home');
		}
		else{
			redirect('login');
		}

	}

	public function signin(){
	    $this->load->view('dashboard/login');
    }

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

}
