<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Dashboard_model");
        $this->load->model("Usuarios_model");

        if (!$this->session->userdata("login")) {
            redirect(base_url() . "");
        }
    }

    public function index()
    {
        $data = array(
            'title'     => 'Tablero Principal',
            'contenido' => $this->load->view('frontend/dashboard', '', true),
        );

        $dataDestinos = array(
            "destinos" => $this->Dashboard_model->getDestinos(),
        );

        $this->load->view('layouts/header_inicio', $data);
        $this->load->view('frontend/dashboard', $dataDestinos);
        $this->load->view('layouts/footer');
    }

}
