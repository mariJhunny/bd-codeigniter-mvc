<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Ventas_model");
	}
	public function index()
	{
		$n = $this->Ventas_model->nro_registros();
		$rep = $this->Ventas_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('ventas_view',$datos);
	}
}
