<?php
class Productos_model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function listado(){
        $consulta = $this->db->get("productos");//cnsulta
        // select * from productos
        return $consulta->result();
    }
    public function nro_registros(){
        $consulta = $this->db->get("productos");//cnsulta
        // select * from productos
        return $consulta->num_rows();
    }
}