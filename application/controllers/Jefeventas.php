<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jefeventas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Jefeventas_model");
	}
	public function index()
	{
		$n = $this->Jefeventas_model->nro_registros();
		$rep = $this->Jefeventas_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('jefeventas_view',$datos);
	}
}
