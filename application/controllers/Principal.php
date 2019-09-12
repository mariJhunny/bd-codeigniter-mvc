<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	public function index()
	 
        $this->load->view('plantilla/cabecera');
        $this->load->view('plantilla/menuizquierdo');
        echo base_url();
        $this->load->view('mensaje');
        $this->load->view('plantilla/pie');
	}
}
