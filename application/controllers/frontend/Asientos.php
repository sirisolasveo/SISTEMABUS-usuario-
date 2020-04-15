<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asientos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Asientos_model");
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "");
        }
    }

    public function testpdf()
    {
        $dni      = $this->input->post("dni");
        $name     = $this->input->post("name");
        $lastName = $this->input->post("lastName");
        $phone    = $this->input->post("phone");
        $total    = $this->input->post("total");

        $destino = $this->input->post("destino");
        $hora    = $this->input->post("hora");

        $sillas = $this->input->post("sillas");

        $empresa = $this->input->post("empresa");

        $content = '<html>';
        $content .= '<head>';
        $content .= '<style>';
        $content .= '.cabecera{
        background-color: #573932;
        height: 90px;
        }
        .general{
        border: 1px solid black;
        width: 700px;
        }
        div h1{
          padding: 3px 3px;
          color: white;
          display: inline-block;
          vertical-align: top;
        }

        .info div{
          width: 300px;
          display:inline-block;
          vertical-align: top;
          padding: 10px 10px;
          border: 1px solid black;
        }
        .right{
          float: right;
        }';
        $content .= '</style>';
        $content .= '</head><body>';
        $content .= '<section class="general">
            <section class="cabecera">
                <div>
                    <h1>
                        PASAJITOS.COM
                    </h1>
                    <h1 class="right">
                        CODE:' . rand(1000, 9000) . '
                    </h1>
                </div>
            </section>
            <section class="info">
                <div>
                    <h4>
                        DNI:' . $dni . '
                    </h4>
                    <h4>
                        NOMBRE:' . $name . '
                    </h4>
                    <h4>
                        APELLIDOS:' . $lastName . '
                    </h4>
                    <h4>
                        CELLULAR:' . $phone . '
                    </h4>
                    <h4>
                        ASIENTOS:' . $sillas . '
                    </h4>
                    <h4>
                        TOTAL A PAGAR(SOLES):' . $total . '
                    </h4>
                </div>
                <div>
                    <h4>
                        FECHA:' . date("Y-m-d") . '
                    </h4>
                    <h4>
                        HORA:' . date("H:i:s") . '

                    </h4>
                    <h3>
                        INFORMACION DE EMPRESA
                    </h3>
                    <h4>
                        Empresa:' . $empresa . '
                    </h4>
                    <h4>
                        Hora de Salida:' . $hora . '
                    </h4>
                    <h4>
                        destino:' . $destino . '
                    </h4>
                </div>
            </section>
        </section>';
        $content .= '</body></html>';

        $this->load->library('pdf');
        $html = $content;

        $dompdf = new PDF();
        $dompdf->load_html($html);
        $dompdf->render();

        // $output = $dompdf->output();

        $dompdf->stream('comprobante.pdf');

        // file_put_contents('test.pdf', $output);
    }

    public function asientos_num()
    {
        $destino = $this->input->post("destino");
        $hora    = $this->input->post("hora");

        $tipo_empresa = $this->input->post("tipo_empresa");
        $tipo_hora    = $this->input->post("tipo_hora");

        $reser = $this->input->get("colreser");

        if (empty($this->input->post("costo"))) {
            $costo = $this->input->get("costo");
        } else {
            $costo = $this->input->post("costo");
        }

        if (empty($this->input->post("destino"))) {
            $destino = $this->input->get("destino");
            $hora    = $this->input->get("hora");
        } else {
            $destino = $this->input->post("destino");
            $hora    = $this->input->post("hora");
        }

        if (empty($this->input->post("tipo_empresa"))) {
            $tipo_empresa = $this->input->get("tipo_empresa");
            $tipo_hora    = $this->input->get("tipo_hora");
            $nombre_tabla = $this->input->get("tipo_empresa");
            $estado       = $this->input->get("tipo_hora");

        } else {

            $tipo_empresa = $this->input->post("tipo_empresa");
            $tipo_hora    = $this->input->post("tipo_hora");
            $nombre_tabla = $this->input->post("tipo_empresa");
            $estado       = $this->input->post("tipo_hora");

        }

        if ($tipo_empresa == 1) {
            switch ($tipo_hora) {
                case 1:
                    $nombre_tabla = "busciva";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
                case 2:
                    $nombre_tabla = "busciva";
                    $estado       = 'estado2';
                    $reser        = 'reservado2';
                    break;
                case 3:
                    $nombre_tabla = "busciva";
                    $estado       = 'estado3';
                    $reser        = 'reservado3';
                    break;
                case 4:
                    $nombre_tabla = "busciva";
                    $estado       = 'estado4';
                    $reser        = 'reservado4';
                    break;

                default:
                    $nombre_tabla = "busciva";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
            }
        }

        if ($tipo_empresa == 2) {
            switch ($tipo_hora) {
                case 1:
                    $nombre_tabla = "buschancas";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
                case 2:
                    $nombre_tabla = "buschancas";
                    $estado       = 'estado2';
                    $reser        = 'reservado2';
                    break;
                case 3:
                    $nombre_tabla = "buschancas";
                    $estado       = 'estado3';
                    $reser        = 'reservado3';
                    break;
                case 4:
                    $nombre_tabla = "buschancas";
                    $estado       = 'estado4';
                    $reser        = 'reservado4';
                    break;

                default:
                    $nombre_tabla = "buschancas";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
            }
        }

        if ($tipo_empresa == 3) {
            switch ($tipo_hora) {
                case 1:
                    $nombre_tabla = "buspalomino";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
                case 2:
                    $nombre_tabla = "buspalomino";
                    $estado       = 'estado2';
                    $reser        = 'reservado2';
                    break;
                case 3:
                    $nombre_tabla = "buspalomino";
                    $estado       = 'estado3';
                    $reser        = 'reservado3';
                    break;
                case 4:
                    $nombre_tabla = "buspalomino";
                    $estado       = 'estado4';
                    $reser        = 'reservado4';
                    break;

                default:
                    $nombre_tabla = "buspalomino";
                    $estado       = 'estado1';
                    $reser        = 'reservado1';
                    break;
            }
        }

        $arrayData = array(
            'destino'  => $destino,
            'hora'     => $hora,
            'estado'   => $estado,
            'nombre'   => $nombre_tabla,
            'reser'    => $reser,
            'costo'    => $costo,
            "asientos" => $this->Asientos_model->getAsientos($nombre_tabla),
            "detalles" => $this->Asientos_model->getDetalles($nombre_tabla),

        );

        $this->load->view('layouts/header_inicio');
        $this->load->view('frontend/asientos', $arrayData);
        $this->load->view('layouts/footer');

    }

    public function update()
    {

        $destino = $this->input->post("destino");
        $hora    = $this->input->post("hora");

        $reservador = $this->input->post("reservador");

        $costo = $this->input->post("costo");

        $dueno1  = $this->input->post("dueno1");
        $dueno2  = $this->input->post("dueno2");
        $dueno3  = $this->input->post("dueno3");
        $dueno4  = $this->input->post("dueno4");
        $dueno5  = $this->input->post("dueno5");
        $dueno6  = $this->input->post("dueno6");
        $dueno7  = $this->input->post("dueno7");
        $dueno8  = $this->input->post("dueno8");
        $dueno9  = $this->input->post("dueno9");
        $dueno10 = $this->input->post("dueno10");

        $dueno11 = $this->input->post("dueno11");
        $dueno12 = $this->input->post("dueno12");
        $dueno13 = $this->input->post("dueno13");
        $dueno14 = $this->input->post("dueno14");
        $dueno15 = $this->input->post("dueno15");
        $dueno16 = $this->input->post("dueno16");
        $dueno17 = $this->input->post("dueno17");
        $dueno18 = $this->input->post("dueno18");
        $dueno19 = $this->input->post("dueno19");
        $dueno20 = $this->input->post("dueno20");

        $dueno21 = $this->input->post("dueno21");
        $dueno22 = $this->input->post("dueno22");
        $dueno23 = $this->input->post("dueno23");
        $dueno24 = $this->input->post("dueno24");
        $dueno25 = $this->input->post("dueno25");
        $dueno26 = $this->input->post("dueno26");
        $dueno27 = $this->input->post("dueno27");
        $dueno28 = $this->input->post("dueno28");
        $dueno29 = $this->input->post("dueno29");
        $dueno30 = $this->input->post("dueno30");

        $dueno31 = $this->input->post("dueno31");
        $dueno32 = $this->input->post("dueno32");
        $dueno33 = $this->input->post("dueno33");
        $dueno34 = $this->input->post("dueno34");
        $dueno35 = $this->input->post("dueno35");
        $dueno36 = $this->input->post("dueno36");
        $dueno37 = $this->input->post("dueno37");
        $dueno38 = $this->input->post("dueno38");
        $dueno39 = $this->input->post("dueno39");
        $dueno40 = $this->input->post("dueno40");

        $dueno41 = $this->input->post("dueno41");
        $dueno42 = $this->input->post("dueno42");
        $dueno43 = $this->input->post("dueno43");
        $dueno44 = $this->input->post("dueno44");
        $dueno45 = $this->input->post("dueno45");
        $dueno46 = $this->input->post("dueno46");
        $dueno47 = $this->input->post("dueno47");
        $dueno48 = $this->input->post("dueno48");
        $dueno49 = $this->input->post("dueno49");
        $dueno50 = $this->input->post("dueno50");

        $col_reservador = $this->input->post("col_reservador");

        $nombreBase = $this->input->post("nombreBASE");

        $estadoBase = $this->input->post("estadoBASE");

        $datos = [
            "id"         => '',
            "empresa"    => $nombreBase,
            "destino"    => $destino,
            "hora"       => $hora,
            "costo"      => $costo,
            "fecha"      => date("d/m/y"),
            "reservador" => $reservador,
        ];

        $this->Asientos_model->guardaInfo($datos);

        $a1  = $this->input->post("1");
        $a2  = $this->input->post("2");
        $a3  = $this->input->post("3");
        $a4  = $this->input->post("4");
        $a5  = $this->input->post("5");
        $a6  = $this->input->post("6");
        $a7  = $this->input->post("7");
        $a8  = $this->input->post("8");
        $a9  = $this->input->post("9");
        $a10 = $this->input->post("10");

        $a11 = $this->input->post("11");
        $a12 = $this->input->post("12");
        $a13 = $this->input->post("13");
        $a14 = $this->input->post("14");
        $a15 = $this->input->post("15");
        $a16 = $this->input->post("16");
        $a17 = $this->input->post("17");
        $a18 = $this->input->post("18");
        $a19 = $this->input->post("19");
        $a20 = $this->input->post("20");

        $a21 = $this->input->post("21");
        $a22 = $this->input->post("22");
        $a23 = $this->input->post("23");
        $a24 = $this->input->post("24");
        $a25 = $this->input->post("25");
        $a26 = $this->input->post("26");
        $a27 = $this->input->post("27");
        $a28 = $this->input->post("28");
        $a29 = $this->input->post("29");
        $a30 = $this->input->post("30");

        $a31 = $this->input->post("31");
        $a32 = $this->input->post("32");
        $a33 = $this->input->post("33");
        $a34 = $this->input->post("34");
        $a35 = $this->input->post("35");
        $a36 = $this->input->post("36");
        $a37 = $this->input->post("37");
        $a38 = $this->input->post("38");
        $a39 = $this->input->post("39");
        $a40 = $this->input->post("40");

        $a41 = $this->input->post("41");
        $a42 = $this->input->post("42");
        $a43 = $this->input->post("43");
        $a44 = $this->input->post("44");
        $a45 = $this->input->post("45");
        $a46 = $this->input->post("46");
        $a47 = $this->input->post("47");
        $a48 = $this->input->post("48");
        $a49 = $this->input->post("49");
        $a50 = $this->input->post("50");

        if ($reservador == $dueno1 || empty($dueno1)) {

            if ($a1 == "off") {
                $usuario1 = "";
            } else {
                $usuario1 = $reservador;
            }

        } else {
            $usuario1 = $dueno1;
        }

        if ($reservador == $dueno2 || empty($dueno2)) {

            if ($a2 == "off") {
                $usuario2 = "";
            } else {
                $usuario2 = $reservador;
            }

        } else {
            $usuario2 = $dueno2;
        }

        if ($reservador == $dueno3 || empty($dueno3)) {

            if ($a3 == "off") {
                $usuario3 = "";
            } else {
                $usuario3 = $reservador;
            }

        } else {
            $usuario3 = $dueno3;
        }

        if ($reservador == $dueno4 || empty($dueno4)) {

            if ($a4 == "off") {
                $usuario4 = "";
            } else {
                $usuario4 = $reservador;
            }

        } else {
            $usuario4 = $dueno4;
        }

        if ($reservador == $dueno5 || empty($dueno5)) {

            if ($a5 == "off") {
                $usuario5 = "";
            } else {
                $usuario5 = $reservador;
            }

        } else {
            $usuario5 = $dueno5;
        }

        if ($reservador == $dueno6 || empty($dueno6)) {

            if ($a6 == "off") {
                $usuario6 = "";
            } else {
                $usuario6 = $reservador;
            }

        } else {
            $usuario6 = $dueno6;
        }

        if ($reservador == $dueno7 || empty($dueno7)) {

            if ($a7 == "off") {
                $usuario7 = "";
            } else {
                $usuario7 = $reservador;
            }

        } else {
            $usuario7 = $dueno7;
        }

        if ($reservador == $dueno8 || empty($dueno8)) {

            if ($a8 == "off") {
                $usuario8 = "";
            } else {
                $usuario8 = $reservador;
            }

        } else {
            $usuario8 = $dueno8;
        }

        if ($reservador == $dueno9 || empty($dueno9)) {

            if ($a9 == "off") {
                $usuario9 = "";
            } else {
                $usuario9 = $reservador;
            }

        } else {
            $usuario9 = $dueno9;
        }

        if ($reservador == $dueno10 || empty($dueno10)) {

            if ($a10 == "off") {
                $usuario10 = "";
            } else {
                $usuario10 = $reservador;
            }

        } else {
            $usuario10 = $dueno10;
        }

// 11 to 20

        if ($reservador == $dueno11 || empty($dueno11)) {

            if ($a11 == "off") {
                $usuario11 = "";
            } else {
                $usuario11 = $reservador;
            }

        } else {
            $usuario11 = $dueno11;
        }

        if ($reservador == $dueno12 || empty($dueno12)) {

            if ($a12 == "off") {
                $usuario12 = "";
            } else {
                $usuario12 = $reservador;
            }

        } else {
            $usuario12 = $dueno12;
        }

        if ($reservador == $dueno13 || empty($dueno13)) {

            if ($a13 == "off") {
                $usuario13 = "";
            } else {
                $usuario13 = $reservador;
            }

        } else {
            $usuario13 = $dueno13;
        }

        if ($reservador == $dueno14 || empty($dueno14)) {

            if ($a14 == "off") {
                $usuario14 = "";
            } else {
                $usuario14 = $reservador;
            }

        } else {
            $usuario14 = $dueno14;
        }

        if ($reservador == $dueno15 || empty($dueno15)) {

            if ($a15 == "off") {
                $usuario15 = "";
            } else {
                $usuario15 = $reservador;
            }

        } else {
            $usuario15 = $dueno15;
        }

        if ($reservador == $dueno16 || empty($dueno16)) {

            if ($a16 == "off") {
                $usuario16 = "";
            } else {
                $usuario16 = $reservador;
            }

        } else {
            $usuario16 = $dueno16;
        }

        if ($reservador == $dueno17 || empty($dueno17)) {

            if ($a17 == "off") {
                $usuario17 = "";
            } else {
                $usuario17 = $reservador;
            }

        } else {
            $usuario17 = $dueno17;
        }

        if ($reservador == $dueno18 || empty($dueno18)) {

            if ($a18 == "off") {
                $usuario18 = "";
            } else {
                $usuario18 = $reservador;
            }

        } else {
            $usuario18 = $dueno18;
        }

        if ($reservador == $dueno19 || empty($dueno19)) {

            if ($a19 == "off") {
                $usuario19 = "";
            } else {
                $usuario19 = $reservador;
            }

        } else {
            $usuario19 = $dueno19;
        }

        if ($reservador == $dueno20 || empty($dueno20)) {

            if ($a20 == "off") {
                $usuario20 = "";
            } else {
                $usuario20 = $reservador;
            }

        } else {
            $usuario20 = $dueno20;
        }

// 20 to 30
        if ($reservador == $dueno21 || empty($dueno21)) {

            if ($a21 == "off") {
                $usuario21 = "";
            } else {
                $usuario21 = $reservador;
            }

        } else {
            $usuario21 = $dueno21;
        }

        if ($reservador == $dueno22 || empty($dueno22)) {

            if ($a22 == "off") {
                $usuario22 = "";
            } else {
                $usuario22 = $reservador;
            }

        } else {
            $usuario22 = $dueno22;
        }

        if ($reservador == $dueno23 || empty($dueno23)) {

            if ($a23 == "off") {
                $usuario23 = "";
            } else {
                $usuario23 = $reservador;
            }

        } else {
            $usuario23 = $dueno23;
        }

        if ($reservador == $dueno24 || empty($dueno24)) {

            if ($a24 == "off") {
                $usuario24 = "";
            } else {
                $usuario24 = $reservador;
            }

        } else {
            $usuario24 = $dueno24;
        }

        if ($reservador == $dueno25 || empty($dueno25)) {

            if ($a25 == "off") {
                $usuario25 = "";
            } else {
                $usuario25 = $reservador;
            }

        } else {
            $usuario25 = $dueno25;
        }

        if ($reservador == $dueno26 || empty($dueno26)) {

            if ($a26 == "off") {
                $usuario26 = "";
            } else {
                $usuario26 = $reservador;
            }

        } else {
            $usuario26 = $dueno26;
        }

        if ($reservador == $dueno27 || empty($dueno27)) {

            if ($a27 == "off") {
                $usuario27 = "";
            } else {
                $usuario27 = $reservador;
            }

        } else {
            $usuario27 = $dueno27;
        }

        if ($reservador == $dueno28 || empty($dueno28)) {

            if ($a28 == "off") {
                $usuario28 = "";
            } else {
                $usuario28 = $reservador;
            }

        } else {
            $usuario28 = $dueno28;
        }

        if ($reservador == $dueno29 || empty($dueno29)) {

            if ($a29 == "off") {
                $usuario29 = "";
            } else {
                $usuario29 = $reservador;
            }

        } else {
            $usuario29 = $dueno29;
        }

        if ($reservador == $dueno30 || empty($dueno30)) {

            if ($a30 == "off") {
                $usuario30 = "";
            } else {
                $usuario30 = $reservador;
            }

        } else {
            $usuario30 = $dueno30;
        }

        // 31 to 40
        if ($reservador == $dueno31 || empty($dueno31)) {

            if ($a31 == "off") {
                $usuario31 = "";
            } else {
                $usuario31 = $reservador;
            }

        } else {
            $usuario31 = $dueno31;
        }

        if ($reservador == $dueno32 || empty($dueno32)) {

            if ($a32 == "off") {
                $usuario32 = "";
            } else {
                $usuario32 = $reservador;
            }

        } else {
            $usuario32 = $dueno32;
        }

        if ($reservador == $dueno33 || empty($dueno33)) {

            if ($a33 == "off") {
                $usuario33 = "";
            } else {
                $usuario33 = $reservador;
            }

        } else {
            $usuario33 = $dueno33;
        }

        if ($reservador == $dueno34 || empty($dueno34)) {

            if ($a34 == "off") {
                $usuario34 = "";
            } else {
                $usuario34 = $reservador;
            }

        } else {
            $usuario34 = $dueno34;
        }

        if ($reservador == $dueno35 || empty($dueno35)) {

            if ($a35 == "off") {
                $usuario35 = "";
            } else {
                $usuario35 = $reservador;
            }

        } else {
            $usuario35 = $dueno35;
        }

        if ($reservador == $dueno36 || empty($dueno36)) {

            if ($a36 == "off") {
                $usuario36 = "";
            } else {
                $usuario36 = $reservador;
            }

        } else {
            $usuario36 = $dueno36;
        }

        if ($reservador == $dueno37 || empty($dueno37)) {

            if ($a37 == "off") {
                $usuario37 = "";
            } else {
                $usuario37 = $reservador;
            }

        } else {
            $usuario37 = $dueno37;
        }

        if ($reservador == $dueno38 || empty($dueno38)) {

            if ($a38 == "off") {
                $usuario38 = "";
            } else {
                $usuario38 = $reservador;
            }

        } else {
            $usuario38 = $dueno38;
        }

        if ($reservador == $dueno39 || empty($dueno39)) {

            if ($a39 == "off") {
                $usuario39 = "";
            } else {
                $usuario39 = $reservador;
            }

        } else {
            $usuario39 = $dueno39;
        }

        if ($reservador == $dueno40 || empty($dueno40)) {

            if ($a40 == "off") {
                $usuario40 = "";
            } else {
                $usuario40 = $reservador;
            }

        } else {
            $usuario40 = $dueno40;
        }

// 40 tp 50
        if ($reservador == $dueno41 || empty($dueno41)) {

            if ($a41 == "off") {
                $usuario41 = "";
            } else {
                $usuario41 = $reservador;
            }

        } else {
            $usuario41 = $dueno41;
        }

        if ($reservador == $dueno42 || empty($dueno42)) {

            if ($a42 == "off") {
                $usuario42 = "";
            } else {
                $usuario42 = $reservador;
            }

        } else {
            $usuario42 = $dueno42;
        }

        if ($reservador == $dueno43 || empty($dueno43)) {

            if ($a43 == "off") {
                $usuario43 = "";
            } else {
                $usuario43 = $reservador;
            }

        } else {
            $usuario43 = $dueno43;
        }

        if ($reservador == $dueno44 || empty($dueno44)) {

            if ($a44 == "off") {
                $usuario44 = "";
            } else {
                $usuario44 = $reservador;
            }

        } else {
            $usuario44 = $dueno44;
        }

        if ($reservador == $dueno45 || empty($dueno45)) {

            if ($a45 == "off") {
                $usuario45 = "";
            } else {
                $usuario45 = $reservador;
            }

        } else {
            $usuario45 = $dueno45;
        }

        if ($reservador == $dueno46 || empty($dueno46)) {

            if ($a46 == "off") {
                $usuario46 = "";
            } else {
                $usuario46 = $reservador;
            }

        } else {
            $usuario46 = $dueno46;
        }

        if ($reservador == $dueno47 || empty($dueno47)) {

            if ($a47 == "off") {
                $usuario47 = "";
            } else {
                $usuario47 = $reservador;
            }

        } else {
            $usuario47 = $dueno47;
        }

        if ($reservador == $dueno48 || empty($dueno48)) {

            if ($a48 == "off") {
                $usuario48 = "";
            } else {
                $usuario48 = $reservador;
            }

        } else {
            $usuario48 = $dueno48;
        }

        if ($reservador == $dueno49 || empty($dueno49)) {

            if ($a49 == "off") {
                $usuario49 = "";
            } else {
                $usuario49 = $reservador;
            }

        } else {
            $usuario49 = $dueno49;
        }

        if ($reservador == $dueno50 || empty($dueno50)) {

            if ($a50 == "off") {
                $usuario50 = "";
            } else {
                $usuario50 = $reservador;
            }

        } else {
            $usuario50 = $dueno50;
        }

        // $usuario = "";

        $data1 = array(
            'numero'        => 1,
            $estadoBase     => $a1,
            $col_reservador => $usuario1,
        );

        $data2 = array(
            'numero'        => 2,
            $estadoBase     => $a2,
            $col_reservador => $usuario2,
        );

        $data3 = array(
            'numero'        => 3,
            $estadoBase     => $a3,
            $col_reservador => $usuario3,
        );

        $data4 = array(
            'numero'        => 4,
            $estadoBase     => $a4,
            $col_reservador => $usuario4,
        );

        $data5 = array(
            'numero'        => 5,
            $estadoBase     => $a5,
            $col_reservador => $usuario5,
        );

        $data6 = array(
            'numero'        => 6,
            $estadoBase     => $a6,
            $col_reservador => $usuario6,
        );

        $data7 = array(
            'numero'        => 7,
            $estadoBase     => $a7,
            $col_reservador => $usuario7,
        );

        $data8 = array(
            'numero'        => 8,
            $estadoBase     => $a8,
            $col_reservador => $usuario8,
        );

        $data9 = array(
            'numero'        => 9,
            $estadoBase     => $a9,
            $col_reservador => $usuario9,
        );

        $data10 = array(
            'numero'        => 10,
            $estadoBase     => $a10,
            $col_reservador => $usuario10,
        );

        $data11 = array(
            'numero'        => 11,
            $estadoBase     => $a11,
            $col_reservador => $usuario11,
        );

        $data12 = array(
            'numero'        => 12,
            $estadoBase     => $a12,
            $col_reservador => $usuario12,
        );

        $data13 = array(
            'numero'        => 13,
            $estadoBase     => $a13,
            $col_reservador => $usuario13,
        );

        $data14 = array(
            'numero'        => 14,
            $estadoBase     => $a14,
            $col_reservador => $usuario14,
        );

        $data15 = array(
            'numero'        => 15,
            $estadoBase     => $a15,
            $col_reservador => $usuario15,
        );

        $data16 = array(
            'numero'        => 16,
            $estadoBase     => $a16,
            $col_reservador => $usuario16,
        );

        $data17 = array(
            'numero'        => 17,
            $estadoBase     => $a17,
            $col_reservador => $usuario17,
        );

        $data18 = array(
            'numero'        => 18,
            $estadoBase     => $a18,
            $col_reservador => $usuario18,
        );

        $data19 = array(
            'numero'        => 19,
            $estadoBase     => $a19,
            $col_reservador => $usuario19,
        );

        $data20 = array(
            'numero'        => 20,
            $estadoBase     => $a20,
            $col_reservador => $usuario20,
        );

        $data21 = array(
            'numero'        => 21,
            $estadoBase     => $a21,
            $col_reservador => $usuario21,
        );

        $data22 = array(
            'numero'        => 22,
            $estadoBase     => $a22,
            $col_reservador => $usuario22,
        );

        $data23 = array(
            'numero'        => 23,
            $estadoBase     => $a23,
            $col_reservador => $usuario23,
        );

        $data24 = array(
            'numero'        => 24,
            $estadoBase     => $a24,
            $col_reservador => $usuario24,
        );

        $data25 = array(
            'numero'        => 25,
            $estadoBase     => $a25,
            $col_reservador => $usuario25,
        );

        $data26 = array(
            'numero'        => 26,
            $estadoBase     => $a26,
            $col_reservador => $usuario26,
        );

        $data27 = array(
            'numero'        => 27,
            $estadoBase     => $a27,
            $col_reservador => $usuario27,
        );

        $data28 = array(
            'numero'        => 28,
            $estadoBase     => $a28,
            $col_reservador => $usuario28,
        );

        $data29 = array(
            'numero'        => 29,
            $estadoBase     => $a29,
            $col_reservador => $usuario29,
        );

        $data30 = array(
            'numero'        => 30,
            $estadoBase     => $a30,
            $col_reservador => $usuario30,
        );

        $data31 = array(
            'numero'        => 31,
            $estadoBase     => $a31,
            $col_reservador => $usuario31,
        );

        $data32 = array(
            'numero'        => 32,
            $estadoBase     => $a32,
            $col_reservador => $usuario32,
        );

        $data33 = array(
            'numero'        => 33,
            $estadoBase     => $a33,
            $col_reservador => $usuario33,
        );

        $data34 = array(
            'numero'        => 34,
            $estadoBase     => $a34,
            $col_reservador => $usuario34,
        );

        $data35 = array(
            'numero'        => 35,
            $estadoBase     => $a35,
            $col_reservador => $usuario35,
        );

        $data36 = array(
            'numero'        => 36,
            $estadoBase     => $a36,
            $col_reservador => $usuario36,
        );

        $data37 = array(
            'numero'        => 37,
            $estadoBase     => $a37,
            $col_reservador => $usuario37,
        );

        $data38 = array(
            'numero'        => 38,
            $estadoBase     => $a38,
            $col_reservador => $usuario38,
        );

        $data39 = array(
            'numero'        => 39,
            $estadoBase     => $a39,
            $col_reservador => $usuario39,
        );

        $data40 = array(
            'numero'        => 40,
            $estadoBase     => $a40,
            $col_reservador => $usuario40,
        );

        $data41 = array(
            'numero'        => 41,
            $estadoBase     => $a41,
            $col_reservador => $usuario41,
        );

        $data42 = array(
            'numero'        => 42,
            $estadoBase     => $a42,
            $col_reservador => $usuario42,
        );

        $data43 = array(
            'numero'        => 43,
            $estadoBase     => $a43,
            $col_reservador => $usuario43,
        );

        $data44 = array(
            'numero'        => 44,
            $estadoBase     => $a44,
            $col_reservador => $usuario44,
        );

        $data45 = array(
            'numero'        => 45,
            $estadoBase     => $a45,
            $col_reservador => $usuario45,
        );

        $data46 = array(
            'numero'        => 46,
            $estadoBase     => $a46,
            $col_reservador => $usuario46,
        );

        $data47 = array(
            'numero'        => 47,
            $estadoBase     => $a47,
            $col_reservador => $usuario47,
        );

        $data48 = array(
            'numero'        => 48,
            $estadoBase     => $a48,
            $col_reservador => $usuario48,
        );

        $data49 = array(
            'numero'        => 49,
            $estadoBase     => $a49,
            $col_reservador => $usuario49,
        );

        $data50 = array(
            'numero'        => 50,
            $estadoBase     => $a50,
            $col_reservador => $usuario50,
        );

        $this->Asientos_model->update1(1, $nombreBase, $data1);
        $this->Asientos_model->update2(2, $nombreBase, $data2);
        $this->Asientos_model->update3(3, $nombreBase, $data3);
        $this->Asientos_model->update4(4, $nombreBase, $data4);
        $this->Asientos_model->update5(5, $nombreBase, $data5);
        $this->Asientos_model->update6(6, $nombreBase, $data6);
        $this->Asientos_model->update7(7, $nombreBase, $data7);
        $this->Asientos_model->update8(8, $nombreBase, $data8);
        $this->Asientos_model->update9(9, $nombreBase, $data9);
        $this->Asientos_model->update10(10, $nombreBase, $data10);

        $this->Asientos_model->update11(11, $nombreBase, $data11);
        $this->Asientos_model->update12(12, $nombreBase, $data12);
        $this->Asientos_model->update13(13, $nombreBase, $data13);
        $this->Asientos_model->update14(14, $nombreBase, $data14);
        $this->Asientos_model->update15(15, $nombreBase, $data15);
        $this->Asientos_model->update16(16, $nombreBase, $data16);
        $this->Asientos_model->update17(17, $nombreBase, $data17);
        $this->Asientos_model->update18(18, $nombreBase, $data18);
        $this->Asientos_model->update19(19, $nombreBase, $data19);
        $this->Asientos_model->update20(20, $nombreBase, $data20);

        $this->Asientos_model->update21(21, $nombreBase, $data21);
        $this->Asientos_model->update22(22, $nombreBase, $data22);
        $this->Asientos_model->update23(23, $nombreBase, $data23);
        $this->Asientos_model->update24(24, $nombreBase, $data24);
        $this->Asientos_model->update25(25, $nombreBase, $data25);
        $this->Asientos_model->update26(26, $nombreBase, $data26);
        $this->Asientos_model->update27(27, $nombreBase, $data27);
        $this->Asientos_model->update28(28, $nombreBase, $data28);
        $this->Asientos_model->update29(29, $nombreBase, $data29);
        $this->Asientos_model->update30(30, $nombreBase, $data30);

        $this->Asientos_model->update31(31, $nombreBase, $data31);
        $this->Asientos_model->update32(32, $nombreBase, $data32);
        $this->Asientos_model->update33(33, $nombreBase, $data33);
        $this->Asientos_model->update34(34, $nombreBase, $data34);
        $this->Asientos_model->update35(35, $nombreBase, $data35);
        $this->Asientos_model->update36(36, $nombreBase, $data36);
        $this->Asientos_model->update37(37, $nombreBase, $data37);
        $this->Asientos_model->update38(38, $nombreBase, $data38);
        $this->Asientos_model->update39(39, $nombreBase, $data39);
        $this->Asientos_model->update40(40, $nombreBase, $data40);

        $this->Asientos_model->update41(41, $nombreBase, $data41);
        $this->Asientos_model->update42(42, $nombreBase, $data42);
        $this->Asientos_model->update43(43, $nombreBase, $data43);
        $this->Asientos_model->update44(44, $nombreBase, $data44);
        $this->Asientos_model->update45(45, $nombreBase, $data45);
        $this->Asientos_model->update46(46, $nombreBase, $data46);
        $this->Asientos_model->update47(47, $nombreBase, $data47);
        $this->Asientos_model->update48(48, $nombreBase, $data48);
        $this->Asientos_model->update49(49, $nombreBase, $data49);
        $this->Asientos_model->update50(50, $nombreBase, $data50);

        redirect(base_url() . "frontend/asientos/asientos_num?destino=$destino&&hora=$hora&&tipo_empresa=$nombreBase&&tipo_hora=$estadoBase&&colreser=$col_reservador&&costo=$costo");
    }

}
