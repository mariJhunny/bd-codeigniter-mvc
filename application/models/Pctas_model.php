<?php
class Pctas_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function listado(){
        $consulta = $this->db->get("pctas");//cnsulta
        // select * from zonas
        return $consulta->result();
    }
    public function nro_registros(){
        $consulta = $this->db->get("pctas");//cnsulta
        // select * from zonas
        return $consulta->num_rows();
    }
}