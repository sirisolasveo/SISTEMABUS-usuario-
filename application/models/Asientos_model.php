<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asientos_model extends CI_Model
{
    public function guardaInfo($datos)
    {
        $resultados = $this->db->insert("lista_reservas", $datos);
    }

    public function getAsientos($nombre_tabla)
    {

        $result = $this->db->get($nombre_tabla);
        return $result->result();

    }

    public function getDetalles($nombre_tabla)
    {
        $result = $this->db->get($nombre_tabla);
        return $result->result();
    }

    public function update1($id, $nombreBase, $a1)
    {
        $this->db->where("numero", $id);

        return $this->db->update($nombreBase, $a1);
    }

    public function update2($id, $nombreBase, $a2)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a2);
    }

    public function update3($id, $nombreBase, $a3)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a3);
    }

    public function update4($id, $nombreBase, $a4)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a4);
    }
    public function update5($id, $nombreBase, $a5)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a5);
    }
    public function update6($id, $nombreBase, $a6)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a6);
    }
    public function update7($id, $nombreBase, $a7)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a7);
    }
    public function update8($id, $nombreBase, $a8)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a8);
    }
    public function update9($id, $nombreBase, $a9)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a9);
    }
    public function update10($id, $nombreBase, $a10)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a10);
    }

    public function update11($id, $nombreBase, $a11)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a11);
    }
    public function update12($id, $nombreBase, $a12)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a12);
    }
    public function update13($id, $nombreBase, $a13)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a13);
    }
    public function update14($id, $nombreBase, $a14)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a14);
    }
    public function update15($id, $nombreBase, $a15)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a15);
    }
    public function update16($id, $nombreBase, $a16)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a16);
    }
    public function update17($id, $nombreBase, $a17)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a17);
    }
    public function update18($id, $nombreBase, $a18)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a18);
    }
    public function update19($id, $nombreBase, $a19)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a19);
    }
    public function update20($id, $nombreBase, $a20)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a20);
    }

    public function update21($id, $nombreBase, $a21)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a21);
    }
    public function update22($id, $nombreBase, $a22)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a22);
    }
    public function update23($id, $nombreBase, $a23)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a23);
    }
    public function update24($id, $nombreBase, $a24)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a24);
    }
    public function update25($id, $nombreBase, $a25)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a25);
    }
    public function update26($id, $nombreBase, $a26)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a26);
    }
    public function update27($id, $nombreBase, $a27)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a27);
    }
    public function update28($id, $nombreBase, $a28)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a28);
    }
    public function update29($id, $nombreBase, $a29)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a29);
    }
    public function update30($id, $nombreBase, $a30)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a30);
    }

    public function update31($id, $nombreBase, $a31)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a31);
    }
    public function update32($id, $nombreBase, $a32)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a32);
    }
    public function update33($id, $nombreBase, $a33)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a33);
    }
    public function update34($id, $nombreBase, $a34)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a34);
    }
    public function update35($id, $nombreBase, $a35)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a35);
    }
    public function update36($id, $nombreBase, $a36)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a36);
    }
    public function update37($id, $nombreBase, $a37)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a37);
    }
    public function update38($id, $nombreBase, $a38)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a38);
    }
    public function update39($id, $nombreBase, $a39)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a39);
    }
    public function update40($id, $nombreBase, $a40)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a40);
    }

    public function update41($id, $nombreBase, $a41)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a41);
    }
    public function update42($id, $nombreBase, $a42)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a42);
    }
    public function update43($id, $nombreBase, $a43)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a43);
    }
    public function update44($id, $nombreBase, $a44)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a44);
    }
    public function update45($id, $nombreBase, $a45)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a45);
    }
    public function update46($id, $nombreBase, $a46)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a46);
    }
    public function update47($id, $nombreBase, $a47)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a47);
    }
    public function update48($id, $nombreBase, $a48)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a48);
    }
    public function update49($id, $nombreBase, $a49)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a49);
    }
    public function update50($id, $nombreBase, $a50)
    {
        $this->db->where("numero", $id);
        return $this->db->update($nombreBase, $a50);
    }

}
