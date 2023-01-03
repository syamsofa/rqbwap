<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public const URL_WITH_IMAGE = "https://api.ultramsg.com/instance21886/messages/image";

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('lib');
        // $this->load->library('lib_security');
        // $this->load->model('role_model');
        $this->load->model('model_kontak');
        $this->load->model('model_kirim');
        //call function
        // Your own constructor code
    }
    public function index()
    {
        redirect('/site/dashboard');
    }
    public function kirim()
    {

        $NomorWa = $this->input->post('NomorWa');
        $Pesan = $this->input->post('Pesan');


        require_once('vendor/autoload.php'); // if you use Composer



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this::URL_WITH_IMAGE,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "token=" . $this->token . "&to=" . $NomorWa . "&image=" . $this->GambarDefault . "&caption=" . $Pesan . "&referenceId=&nocache=",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }
    public $GambarDefault = "https://regsosek.rembangkab.net/undangan.jpeg";

    public $upload_dir = 'uploads/';
    public $token = "0aw976k6gc8hj7lz";
    public function kirimsemua()

    {

        print_r($this->input->post());
        $this->model_kirim->kirim_semua($this->input->post());
    }
}
