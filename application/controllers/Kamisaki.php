<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamisaki extends CI_Controller {

	public function index()
	{
       // echo "Juro que no lo vuelvo a hacer<br>";
        $codigo=666;
        $datos["codigo"]=$codigo;
        $datos["nombre"]="Filiberto";
        //echo "El codigo es: $codigo<br>";
		$this->load->view('saludo_view',$datos);
	}
}
