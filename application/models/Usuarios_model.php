<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function logear($email, $password)
    {
        $this->db->select("correo,dni,nombre,apellidos,celular,password");
        $this->db->where('correo', $email);
        // $this->db->where('password', $password);

        $resultados = $this->db->get("usuarios");

        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }
    }

    public function validar_datos($dni, $email)
    {
        $query = "SELECT * FROM usuarios WHERE dni='$dni' or correo='$email'";

        $resultados = $this->db->query($query);

        $numero_filas = $resultados->num_rows();

        if ($numero_filas == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function guardar($datos)
    {
        $resultados = $this->db->insert("usuarios", $datos);

        if ($resultados) {
            return true;
        } else {
            return false;
        }
    }

    public function getAsientos()
    {
        $result = $this->db->get("piso1");
        return $result->result();
    }

    public function update1($id, $a1)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a1);
    }
    public function update2($id, $a2)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a2);
    }
    public function update3($id, $a3)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a3);
    }
    public function update4($id, $a4)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a4);
    }
    public function update5($id, $a5)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a5);
    }
    public function update6($id, $a6)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a6);
    }
    public function update7($id, $a7)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a7);
    }
    public function update8($id, $a8)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a8);
    }
    public function update9($id, $a9)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a9);
    }
    public function update10($id, $a10)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a10);
    }

    public function update11($id, $a11)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a11);
    }
    public function update12($id, $a12)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a12);
    }
    public function update13($id, $a13)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a13);
    }
    public function update14($id, $a14)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a14);
    }
    public function update15($id, $a15)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a15);
    }
    public function update16($id, $a16)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a16);
    }
    public function update17($id, $a17)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a17);
    }
    public function update18($id, $a18)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a18);
    }
    public function update19($id, $a19)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a19);
    }
    public function update20($id, $a20)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a20);
    }

    public function update21($id, $a21)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a21);
    }
    public function update22($id, $a22)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a22);
    }
    public function update23($id, $a23)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a23);
    }
    public function update24($id, $a24)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a24);
    }
    public function update25($id, $a25)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a25);
    }
    public function update26($id, $a26)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a26);
    }
    public function update27($id, $a27)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a27);
    }
    public function update28($id, $a28)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a28);
    }
    public function update29($id, $a29)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a29);
    }
    public function update30($id, $a30)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a30);
    }

    public function update31($id, $a31)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a31);
    }
    public function update32($id, $a32)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a32);
    }
    public function update33($id, $a33)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a33);
    }
    public function update34($id, $a34)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a34);
    }
    public function update35($id, $a35)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a35);
    }
    public function update36($id, $a36)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a36);
    }
    public function update37($id, $a37)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a37);
    }
    public function update38($id, $a38)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a38);
    }
    public function update39($id, $a39)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a39);
    }
    public function update40($id, $a40)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a40);
    }

    public function update41($id, $a41)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a41);
    }
    public function update42($id, $a42)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a42);
    }
    public function update43($id, $a43)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a43);
    }
    public function update44($id, $a44)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a44);
    }
    public function update45($id, $a45)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a45);
    }
    public function update46($id, $a46)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a46);
    }
    public function update47($id, $a47)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a47);
    }
    public function update48($id, $a48)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a48);
    }
    public function update49($id, $a49)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a49);
    }
    public function update50($id, $a50)
    {
        $this->db->where("asiento_num", $id);
        return $this->db->update("piso1", $a50);
    }

}
