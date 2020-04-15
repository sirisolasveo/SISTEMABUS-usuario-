<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Principal_model");
        // $this->load->model("Facultades_model");
    }

    public function index()
    {
        $dataDestinos = array(
            "destinos" => $this->Principal_model->getDestinos(),
        );

        $this->load->view('layouts/header');
        $this->load->view('frontend/index', $dataDestinos);
        $this->load->view('layouts/footer');
    }

}
