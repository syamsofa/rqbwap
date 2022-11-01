<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicepengguna extends CI_Controller
{

    public const user = ["admin", "adminrqb@2022"];
    public function index()
    {
        print_r([1, 2, 3, 4]);
    }
    public function login()
    {
        // print_r($this->input->post());
        if ($this->input->post('username') == $this::user[0] and $this->input->post('password') == $this::user[1]) {
            echo json_encode(["sukses" => true]);

            $this->session->set_userdata('username',$this->input->post('username'));
            // $this->session->set_userdata('RoleIdAktif', 2);
        } else
            echo json_encode(["sukses" => false]);
    }
}
