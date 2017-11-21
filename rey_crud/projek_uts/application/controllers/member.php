<?php
/**
* 	
*/
class member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('member_model');

		if(!$this->session->userdata('logined') ||
			$this->session->userdata('logined') != true) {
			redirect ('/');
		}
		
	}

	function index()
	{
		$data['data_mahasiswa']=$this->member_model->ambil_data();
		$this->load->view('pemesanan/member/member_list',$data);
	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('member/tambah_aksi'),
			'user' => set_value ('user'),
			'pass' => set_value ('pass'),
			
			'button' => 'Tambah'						
			);

		$this->load->view('pemesanan/member/member_form',$data);
	}

	function tambah_aksi (){
		$data=array(

			'user' 		=>$this->input->post('user'),
			'pass' 		=>$this->input->post('pass'),
			
			);

		$this->member_model->tambah_data($data);
		redirect(site_url('member'));
	}

	function delete ($user){
		$this->member_model->hapus_data($user);
		redirect(site_url('member'));
	}

	function edit ($user){
		$mhs=$this->member_model->ambil_data_id($user);
		$data=array(
			'user' 		=>set_value('user',$mhs[0]->user),
			'pass' 		=>set_value('pass',$mhs[0]->pass),
			'action'		=>site_url('member/edit_aksi'),
			'button'		=> 'Edit'		
			);

		$this->load->view('pemesanan/member/member_form',$data);

	}

	function edit_aksi () {
		$data=array(

			'user' 		=>$this->input->post('user'),
			'pass' 		=>$this->input->post('pass')
			
			);
		$user=$this->input->post('user');
		$this->member_model->edit_data($user,$data);
		redirect(site_url('member'));

	}



}
?>