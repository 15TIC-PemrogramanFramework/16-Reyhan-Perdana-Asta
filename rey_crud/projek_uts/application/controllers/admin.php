<?php
/**
* 	
*/
class admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Admin_model');


		$this->load->helper(array('url'));
		$this->load->model('admin_model');

		if(!$this->session->userdata('logined') ||
			$this->session->userdata('logined') != true) {
			redirect ('Login_admin');
		}
		
	}

	function index()
	{
		$data['data_mahasiswa']=$this->Admin_model->ambil_data();
		$this->load->view('pemesanan/admin/admin_list',$data);
	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('admin/tambah_aksi'),
			'username' => set_value ('username'),
			'password' => set_value ('password'),
			
			'button' => 'Tambah'						
			);

		$this->load->view('pemesanan/admin/admin_form',$data);
	}

	function tambah_aksi (){
		$data=array(

			'username' 		=>$this->input->post('username'),
			'password' 		=>$this->input->post('password'),
			
			);

		$this->Admin_model->tambah_data($data);
		redirect(site_url('admin'));
	}

	function delete ($username){
		$this->Admin_model->hapus_data($username);
		redirect(site_url('admin'));
	}

	function edit ($username){
		$mhs=$this->Admin_model->ambil_data_id($username);
		$data=array(
			'username' 		=>set_value('username',$mhs[0]->username),
			'password' 		=>set_value('password',$mhs[0]->password),
			'action'		=>site_url('admin/edit_aksi'),
			'button'		=> 'Edit'		
			);

		$this->load->view('pemesanan/admin/admin_form',$data);

	}

	function edit_aksi () {
		$data=array(

			'username' 		=>$this->input->post('username'),
			'password' 		=>$this->input->post('password')
			
			);
		$username=$this->input->post('username');
		$this->Admin_model->edit_data($username,$data);
		redirect(site_url('admin'));

	}



}
?>