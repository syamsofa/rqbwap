<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('lib');
		// $this->load->library('lib_security');
		// $this->load->model('role_model');
		$this->load->model('model_kontak');
		//call function
		// Your own constructor code
	}
	public function index()
	{
		redirect('/site/dashboard');
	}
	public function dashboard()
	
	{
		$data = array(
			'menu' => $this->uri->segment(2),
			'judul' => 'Selamat Datang'


		);
		$this->load->view('site', $data);
		// $this->load->view('site');
	}
	public function kirim()
	{
		$data = array(
			'menu' => $this->uri->segment(2),
			'judul' => 'Kirim Pesan Whatsapp Broadcast',
			'daftarKontak' => $this->model_kontak->read_kontak()


		);
		$this->load->view('site', $data);
	}
	public function logout()
	{
		$array_items = array('username');
		$this->session->unset_userdata($array_items);
		
		
		session_destroy();
		redirect('site/index');
	}
	
}
