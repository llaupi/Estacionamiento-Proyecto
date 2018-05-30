<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Usuario');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('inicio');
		$this->load->view('template/footer');
	}
	public function adminIndex()
	{
		$this->load->view('templateAd/header');
		$this->load->view('admin/index');
		$this->load->view('templateAd/footer');
	}
	public function camaraVivo()
	{
		$this->load->view('templateAd/header');
		$this->load->view('admin/camara');
		$this->load->view('templateAd/footer');
	}
	public function Registrar()
	{
		$this->load->view('templateAd/header');
		$this->load->view('admin/Registrar');
		$this->load->view('templateAd/footer');
	}

	public function mostrarpersonal()
	{
		$this->load->view('templateAd/header');
		$this->load->view('admin/personal');
		$this->load->view('templateAd/footer');
	}



	 public function login()
	{

		$rut = $this->input->post('rut');
		$clave = $this->input->post('clave');
		$arrayuser = $this->Usuario->login1($rut,md5($clave));
		if (count($arrayuser)>0) {
			if ($arrayuser[0]->tipo==0) {

				echo json_encode(array("msg"=>"administrador"));
			} else {
				echo json_encode(array("msg"=>"guardia"));
			}
			
		}else{
			echo json_encode(array("msg"=>"usuario no encontrado"));
		}
	}



	
}
