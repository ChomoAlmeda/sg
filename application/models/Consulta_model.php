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
            'Fecha >=' => $manana
            );

        $consulta = $this->db->get_where('ag_agenda', $condicion);
        return $consulta;
    }

    function documentos(){
        $this->db->order_by('IdDocumentos', 'DESC');
        $this->db->join('ab_areas', 'bc_documentos.IdArea = ab_areas.IdArea');
        $consulta = $this->db->get('bc_documentos');
        return $consulta;
    }
    
    function agregar_agenda($evento, $lugar, $fecha, $hora){
        $condicion = array(
                'Evento'    => $evento,
                'Lugar'     => $lugar, 
                'Fecha'     => $fecha,
                'Hora'      => $hora
            );
        $this->db->insert('ag_agenda', $condicion);
    }
    function agregarD($hora, $fechaD, $tramite, $observacion, $quien){
        $condicion = array(
                'Hora' => $hora,
                'Fecha' => $fechaD, 
                'Tramite' => $tramite,
                'Observacion' => $observacion, 
                'IdArea' => $quien
            );

        $this->db->insert('bc_documentos', $condicion);
    }
    function areas(){
        $this->db->order_by('Area');
        $consulta = $this->db->get('ab_areas');
        return $consulta;
    }

}
?>