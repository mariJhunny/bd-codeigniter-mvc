<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zonas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Zonas_model");
	}
	public function index()
	{
		$n = $this->Zonas_model->nro_registros();
		$rep = $this->Zonas_model->listado();//llama listado
		//print_r($rep);
		//echo $n . "<br>";
		$datos["nroreg"]=$n;
		$datos["reporte"]=$rep;
		$this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/menuizquierdo');       
		$this->load->view('zonas_view',$datos);
		$this->load->view('plantilla/pie');
	}
}
