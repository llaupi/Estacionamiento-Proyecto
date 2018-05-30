<?php

class Usuario extends CI_Model{
//========== login del navbar del header Template ==============
  public function login1($rut,$clave)
  {
    $this->db->where("rut",$rut);
    $this->db->where("clave",$clave);
    return $this->db->get("usuario")->result();
  }
  
}