<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}
	public function index()
	{
		$n = $this->Clientes_model->nro_registros();
		$rep = $this->Clientes_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('clientes_view',$datos);
	}
}
