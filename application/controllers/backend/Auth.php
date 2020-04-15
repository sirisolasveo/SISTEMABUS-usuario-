<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->load->library('encryption');
    }

    public function index()
    {
        if ($this->session->userdata("login")) {
            redirect(base_url() . "frontend/dashboard");
        } else {
            $this->load->view('frontend/index');
        }

    }

    public function login()
    {
        $email = $this->input->post("email");
        $pass  = $this->input->post("password");

        $this->load->model('Usuarios_model');

        $res = $this->Usuarios_model->logear($email, $pass);

        $contra = $res->password;

        $vale = md5($pass);

        if ($contra == $vale) {

            if ($res) {

                $data = array(
                    'id_user'  => $res->correo,
                    'dni'      => $res->dni,
                    'name'     => $res->nombre,
                    'lastName' => $res->apellidos,
                    'phone'    => $res->celular,
                    'login'    => true,
                );

                $this->session->set_userdata($data);
                redirect(base_url() . "frontend/dashboard");

            } else {
                $this->session->set_flashdata("error", "<span><strong>Lo sentimos,</strong> el email y contraseña ingresados no coinciden con nuestros registros</span>");
                redirect(base_url() . "");
            }

        } else {
            $this->session->set_flashdata("error", "<span><strong>Lo sentimos,</strong> el email y contraseña ingresados no coinciden con nuestros registros</span>");
            redirect(base_url() . "");
        }

    }

    public function save()
    {
        $dni       = $this->input->post("dni");
        $nombre    = $this->input->post("nombre");
        $apellido  = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $celular   = $this->input->post("celular");
        $email     = $this->input->post("correo");
        $password  = $this->input->post("password");

        $this->load->model('Usuarios_model');
        // $this->load->library('encryption');

        // $encrypted_string = $this->encryption->encrypt($password);

        $encrypted_string = md5($password);

        $datos = [
            "id"        => '',
            "dni"       => $dni,
            "nombre"    => $nombre,
            "apellidos" => $apellido,
            "celular"   => $celular,
            "direccion" => $direccion,
            "correo"    => $email,
            "password"  => $encrypted_string,
        ];

        $valida = $this->Usuarios_model->validar_datos($dni, $email);

        if ($valida) {

            $res = $this->Usuarios_model->guardar($datos);

            if ($res) {
                /*echo "Sucess";*/
                redirect(base_url() . "");

                // $data = array(
                //     'id_user' => $email,
                //     'user'    => $dni,
                //     'login'   => true,
                // );
                // $this->session->set_userdata($data);
                // redirect(base_url() . "frontend/dashboard");

            } else {
                $this->session->set_flashdata("error", "<span><strong>Lo sentimos,</strong> la informacion que insertar no es correcta</span>");
                redirect(base_url() . "");
            }

        } else {
            $this->session->set_flashdata("error", "<span><strong>Lo sentimos,</strong>pero el usuario ya existe...</span>");
            redirect(base_url() . "");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url() . "");
    }
}
