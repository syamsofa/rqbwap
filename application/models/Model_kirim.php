<?php

class Model_kirim extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('lib');
        // $this->load->library('lib_security');
        // $this->load->model('role_model');
        // $this->load->model('email_model');
        //call function
        // Your own constructor code
    }
    public function kirim_semua($input)
    {
        // print_r($input);

        $this->model_kontak->read_kontak();
        print_r($this->model_kontak->read_kontak()['data']);

        $this->db->query("insert into antrian (Pesan) values (?)", [$input['Pesan']]);
    }
}
