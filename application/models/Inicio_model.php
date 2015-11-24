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

    function buscarD($buscar){
        $condicion = array(
                'Fecha' => $buscar
            );

        $consulta = $this->db->get_where('bc_documentos', $condicion);
        return $consulta;
    }

    function buscarModificar($id){
        $condicion = array(
                'bc_documentos.IdDocumentos' => $id
            );
        $consulta = $this->db->get_where('bc_documentos', $condicion);
        return $consulta;
    }
    function buscarA($buscar){
        $condicion = array(
                'Fecha' => $buscar
            );

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }

    function buscarFolio($buscarFolio){
        $condicion = array(
                'Folio' => $buscarFolio
            );
        $consulta = $this->db->get_where('bc_documentos', $condicion);
        return $consulta;
    }

    function buscarArea($buscarArea){
        $this->db->like('Area', $buscarArea);
        $consulta = $this->db->get('bc_documentos');
        return $consulta;
    }


}
?>