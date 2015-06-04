<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consulta_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    function agenda($hoy){
        $condicion = array(
                'Fecha' => $hoy
                );
        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }

    function manana($manana){
        $condicion = array(
            'Fecha' => $manana
            );

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }
}
?>