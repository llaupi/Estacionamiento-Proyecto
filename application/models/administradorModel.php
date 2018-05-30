<?php


class administradorModel extends CI_Model{

  public function personal()
  {
    return $this->db->get('usuario')->result();
  }



  public function condominio()
{
  return $this->db->get('condominio')->result();
}

public function buscarUsuario($rut){
  $this->db->where("rut", $rut);
  $this->db->select("rut");
  return $this->db->get("usuario")->result();
}
public function registrarpersonal($rut,$nombre,$apellido,$direccion,$clave,$tipo,$condominio)
{
  $data = array(
    "rut"=>$rut,
    "nombre"=>$nombre,
    "apellido"=>$apellido,
    "direccion"=>$direccion,
    "clave"=>md5($clave),
    "tipo"=>$tipo,
    "rut_c"=>$condominio
  );
  return $this->db->insert("usuario",$data);
}





}