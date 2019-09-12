<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensaje extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Mensaje_model");
	}
	public function index()
	{
		$n = $this->Mensaje_model->nro_registros();
		$rep = $this->Mensaje_model->listado();//llama listado
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('mensaje_view',$datos);
	}
}
