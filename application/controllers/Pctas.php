<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pctas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Pctas_model");
	}
	public function index()
	{
		$n = $this->Pctas_model->nro_registros();
		$rep = $this->Pctas_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('pctas_view',$datos);
	}
}
