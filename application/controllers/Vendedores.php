<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Vendedores_model");
	}
	public function index()
	{
		$n = $this->Vendedores_model->nro_registros();
		$rep = $this->Vendedores_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/menuizquierdo'); 
		$this->load->view('vendedores_view',$datos);
		$this->load->view('plantilla/pie');
	}
}
