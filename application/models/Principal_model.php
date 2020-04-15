<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal_model extends CI_Model
{
    public function getDestinos()
    {
        $this->db->select("empresa,lugar as destino,hora,costo");

        $this->db->join('lugares', 'salidas.destino=lugares.id');

        $result = $this->db->get("salidas");
        return $result->result();
    }

    // public function guardar($datos)
    // {
    //     $resultados = $this->db->insert("registro", $datos);

    //     if ($resultados) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
