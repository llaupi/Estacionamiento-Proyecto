<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Administrador extends CI_Controller{

  public function __construct()
  {
   parent:: __construct();
   $this->load->model('administradorModel');
  }
// mostrar tabla con el personal registrado==============
  public function personal()
  {
    echo json_encode($this->administradorModel->personal());
  }
// mostrar condominios en el select de registrar ==============
  public function condominios()
  {
    echo json_encode($this->administradorModel->condominio());
  }
//=============================================================

public function registrarPersonal()
{
  $rut = $this->input->post("rut");
  $nombre = $this->input->post("nombre");
  $apellido = $this->input->post("apellido");
  $direccion = $this->input->post("direccion");
  $clave = $this->input->post("clave");
  $tipo = $this->input->post("tipo");
  $condominio = $this->input->post("condominio");
  $cantidad = sizeof($this->administradorModel->buscarUsuario($rut));
  if ($cantidad>0) {
    echo json_encode(array("msg"=>"error el rut ya esta registrado"));
  }else{
    $this->administradorModel->registrarpersonal($rut,$nombre,$apellido,$direccion,$clave,$tipo,$condominio);
    echo json_encode(array("msg"=>"usuario creado"));
  }
}

}