<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->db->reconnect();
    }
    

    function comprobar($nombre, $contra){
        $condicion = array(
                'Nombre' => $nombre, 
                'contra' => $contra, 
            );
        $consulta = $this->db->get_where('ab_usuarios', $condicion);
        return $consulta;
    }

    

    function buscar($buscar){
        $condicion = array(
                'Fecha' => $buscar
            );

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }
}
?>