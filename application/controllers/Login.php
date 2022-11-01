<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public $pengguna;


	public $satker;
	public $organisasi;
	public $pekerjaan;
	public function __construct()
	{
		parent::__construct();
	
		// Your own constructor code
	}
	public function index()
	{
		$data = array(
		

		);

		$this->load->view('login', $data);
	}
	
}
