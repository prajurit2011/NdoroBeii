<?php
Class Users extends CI_Controller{
	public function index(){
		$this->load->model("model_users");
		$data['xx'] = $this->model_users->load_user();

		$this->load->view("users/daftar_user",$data);
	}



	public function add_user(){
		$this->load->model("model_users");

		$data['tipe']="add";
		if(isset($_POST['tombol_submit'])) {
			//proses simpan dilakukan
			$this->model_users->simpan($_POST);
			redirect("data/");
		}
		
		$this->load->view("users/add_user",$data);
}


public function lihat_data(){
		$this->load->model("model_users");
		redirect("users/daftar_user");
		$data['daftar_users'] = $this->model_users->load_users();

		$this->load->view("users/daftar_user",$data);
	}

	public function daftar_user(){
		$this->load->model("model_users");
		
		$data['xx'] = $this->model_users->load_users();

		$this->load->view("users/daftar_user",$data);
	}









	}
	
