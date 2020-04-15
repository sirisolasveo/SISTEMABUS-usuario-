<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function getDestinos()
    {

        $this->db->select("salidas.id as id,empresa,lugar as destino,hora,costo,destino as idhora");

        $this->db->join('lugares', 'salidas.destino=lugares.id');

        $result = $this->db->get("salidas");
        return $result->result();
    }

}
