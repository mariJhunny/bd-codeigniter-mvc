<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}
	public function index()
	{
		$n = $this->Productos_model->nro_registros();
		$rep = $this->Productos_model->listado();//llama listado
		//print_r($rep);
		//echo $n . "<br>";
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('Productos_view',$datos);
	}
}
