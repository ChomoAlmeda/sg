<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    function comprobar($nombre, $contra){
    	$condicion = array(
    			'ab_usuarios.Nombre'	=> $nombre,
    			'ab_usuarios.Contra'	=> $contra
    		);
    	$resultado = $this->db->get_where('ab_usuarios', $condicion);
    	return $resultado;
    }

    function folios(){
        $consulta =$this->db->get('ab_folios');
        return $consulta;
    }

   function folioN($folio, $avance){
        $condicion = array(
                'Folio' => $folio,
                'Avance' => '1'
            );
        $this->db->insert('ab_folios', $condicion);
   }

    function personales($folio, $tipo, $integrantes){
        $condicion= array(
                'Folio' => $folio,
                'Tipo'  => $tipo,
                'Integrantes' => $integrantes
            );
        $this->db->insert('en_personales', $condicion);
    }

    function dependientes($folio, $parentesco, $sexo, $edad, $escolaridad, $ocupa, $lugar, $estado, $le){
        $condicion = array(
                "Folio" => $folio, 
                "Parentesco"    => $parentesco,
                "Sexo"          => $sexo,
                "Edad"          => $edad,
                "Escolaridad"   => $escolaridad,
                "Ocupacion"     => $ocupa,
                "Lugar"         => $lugar,
                "Estado"        => $estado,
                "Leer"          => $le
            );

        $this->db->insert('en_dependientes', $condicion);
    }

    function vivienda($folio, $ubicacion, $tipo, $documento, $matParedes, $matTecho, $matPiso, $superficie, $construccion, $habitaciones, $recamaras, $banos, $cocina, $sala, $otros, $perdorm, $servAgua, $servElec, $servDrenaje, $servMedidor, $servPaga, $servPostal, $servTelefono, $servCompu, $combustible, $animalesc, $animales, $faunac, $fauna){
        $condicion = array(
                'Folio'         => $folio,
                'Ubicacion'     => $ubicacion, 
                'Tipo'          => $tipo, 
                'Documento'     => $documento, 
                'matParedes'    => $matParedes, 
                'matTecho'      => $matTecho,
                'matPiso'       => $matPiso,
                'Superficie'    => $superficie, 
                'Construccion'  => $construccion,
                'Habitaciones'  => $habitaciones, 
                'Recamaras'     => $recamaras,
                'Banos'         => $banos, 
                'Cocina'        => $cocina, 
                'Sala'          => $sala, 
                'Otros'         => $otros, 
                'perDorm'       => $perdorm, 
                'servAgua'      => $servAgua, 
                'servElect'     => $servElec, 
                'servDrenaje'   => $servDrenaje, 
                'servMedidor'   => $servMedidor, 
                'servPaga'      => $servPaga, 
                'servPostal'    => $servPostal, 
                'servTelefono'  => $servTelefono, 
                'servCompu'     => $servCompu, 
                'Combustible'   => $combustible, 
                'animalesC'     => $animalesc, 
                'Animales'      => $animales, 
                'faunaC'        => $faunac, 
                'Fauna'         => $fauna    
            ); 
        $this->db->insert('en_vivienda', $condicion);
    }

   function familiar($folio, $educacion, $edup, $relPareja, $relHijos, $relPareja, $relHijos, $relPadres, $relHermanos, $relAbuelos, $relOtros, $actividades, $horas, $llamados, $situacion, $sitP, $ingresos, $alimentacion, $vestido, $vivienda, $salud, $educacion1, $diversion, $bebidas, $ahorro, $otro){
        $condicion = array(
                'Folio'         => $folio, 
                'Educacion'     => $educacion,
                'eduP'          => $edup, 
                'relPareja'     => $relPareja,
                'relHijos'      => $relHijos, 
                'relPadres'     => $relPadres, 
                'relHermanos'   => $relHermanos,
                'relAbuelos'    => $relAbuelos, 
                'relOtros'      => $relOtros, 
                'Actividades'   => $actividades, 
                'Horas'         => $horas, 
                'llamados'      => $llamados, 
                'situacion'     => $situacion, 
                'sit'           => $sitP, 
                'Ingresos'      => $ingresos, 
                'Alimentacion'  => $alimentacion, 
                'Vestido'       => $vestido, 
                'Vivienda'      => $vivienda, 
                'Salud'         => $salud, 
                'Educacion1'    => $educacion1, 
                'Diversion'     => $diversion, 
                'Bebidas'       => $bebidas, 
                'Ahorro'        => $ahorro, 
                'Otro'          => $otro
            );  
        $this->db->insert('en_familiar', $condicion);
    }

   function salud($folio, $servicios, $Frecuencia, $eFrecuentes, $cPadres, $edad1, $sexo1, $soltero1, $edad2,  $sexo2,  $soltero2, $edad3, $sexo3, $soltero3, $edad4, $sexo4, $soltero4, $edad5, $sexo5, $soltero5, $mPlanificacion, $dsi, $sexodisc, $tipodisc, $asi){
        $condicion = array(
                'Folio'     => $folio,
                'Servicios' => $servicios, 
                'Frecuencia'=>  $Frecuencia, 
                'eFrecuentes' => $eFrecuentes,
                'cPadres'   => $cPadres,
                'edad1'     => $edad1,
                'sexo1'     => $sexo1, 
                'soltero1'  => $soltero1,
                'edad2'     => $edad2,
                'sexo2'     => $sexo2, 
                'soltero2'  => $soltero2,
                'edad3'     => $edad3,
                'sexo3'     => $sexo3, 
                'soltero3'  => $soltero3,
                'edad4'     => $edad4,
                'sexo4'     => $sexo4, 
                'soltero4'  => $soltero4,
                'edad5'     => $edad5,
                'sexo5'     => $sexo5, 
                'soltero5'  => $soltero5,
                'mPlanificacion' => $mPlanificacion,
                'dSi'       => $dsi,
                'sexoDisc'  => $sexodisc,
                'tipoDisc'  => $tipodisc, 
                'aSi'       => $asi
            );
        $this->db->insert('en_salud', $condicion);
    }

    function  comunidad($folio,$servelect, $comentelect, $servagua, $comentagua, $servtel, $comenttel, $servreco, $comentreco, $servgas, $comentgas, $servpol, $comentpol, $servtrans, $comentTrans, $servrecre, $comentrecre, $servdep, $comentdep, $servsalud, $comentsalud, $servvial, $comentvial, $servalum, $comentalum, $basura, $problemas1, $problemas2, $problemas3, $opinion, $municipales, $negocio, $servelectD, $servaguaD, $servtelD, $servrecoD, $servgasD, $servpolD, $servtransD, $servrecreD, $servdepD, $servsaludD, $servVialD, $servAlumD){
        $condicion = array(
            'Folio'         => $folio,
            'servElect'     => $servelect, 
            'comentElect'   => $comentelect, 
            'servAgua'      => $servagua,
            'comentAgua'    => $comentagua,
            'servTel'       => $servtel,
            'comentTel'     => $comenttel,
            'servReco'      => $servreco,
            'comentReco'    => $comentreco,
            'servGas'       => $servgas,
            'comentGas'     => $comentgas,
            'servPol'       => $servpol,
            'comentPol'     => $comentpol,
            'servTrans'     => $servtrans,
            'comentTrans'   => $comentTrans,
            'servRecre'     => $servrecre, 
            'comentRecre'   => $comentrecre,
            'servDep'       => $servdep,
            'comentDep'     => $comentdep,
            'servSalud'     => $servsalud,
            'comentSalud'   => $comentsalud,
            'servVial'      => $servvial,
            'comentVial'    => $comentvial,
            'servAlum'      => $servalum,
            'comentAlum'    => $comentalum,
            'basura'        => $basura,
            'problemas1'    => $problemas1,
            'problemas2'    => $problemas2,
            'problemas3'    => $problemas3,
            'opinion'       => $opinion,
            'municipales'   => $municipales,
            'negocio'       => $negocio, 
            'servElectD'    => $servelectD,
            'servAguaD'     => $servaguaD,
            'servTelD'      => $servtelD,
            'servRecoD'     => $servrecoD,
            'servGasD'      => $servgasD,
            'servPolD'      => $servpolD,
            'servTransD'    => $servtransD,
            'servRecreD'    => $servrecreD,
            'servDepD'      => $servdepD,
            'servSaludD'    => $servsaludD,
            'servVialD'     => $servVialD,
            'servAlumD'     => $servAlumD
        );
        $this->db->insert('en_comunidad', $condicion);
    }

    function culturales($folio, $religion, $fsi, $nombre1, $fecha1, $nombre2, $fecha2, $nombre3, $fecha3, $lsi, $tipol){
        $condicion = array(
                'Folio'     => $folio, 
                'religion'  => $religion,
                'fsi'       => $fsi,
                'nombre1'   => $nombre1,
                'fecha1'    => $fecha1,
                'nombre2'   => $nombre2,
                'fecha2'    => $fecha2,
                'nombre3'   => $nombre3,
                'fecha3'    => $fecha3,
                'lSi'       => $lsi,
                'tipoL'     => $tipol
            );

        $this->db->insert('en_cultura', $condicion);
    }

    function historial($folio, $estado, $municipio, $comunidad, $anios, $osi,$oa , $ob, $oc, $od, $oe){
        $condicion = array(
                'Folio'     => $folio,
                'Estado'    => $estado,
                'Municipio' => $municipio,
                'Comunidad' => $comunidad,
                'Anios'     => $anios,
                'oSi'       => $osi,
                'oA'        => $oa,
                'oB'        => $ob,
                'oC'        => $oc,
                'oD'        => $od,
                'oE'        => $oe
            );
        $this->db->insert('en_historial', $condicion);
    }

    function adicciones($folio, $tabaco, $tabacoC, $tabacoD, $tabacoE, $bebidas, $bebidasRazon, $edadConsumo, $vi1, $cl1, $cr1, $br1, $pu1, $al1, $vi2, $cl2, $cr2, $br2, $pu2, $al2, $vi3, $cl3, $cr3, $br3, $pu3, $al3, $mayor, $sustancia, $vecesD, $ultimaD, $consecuenciaD, $conocimiento, $cursoD, $actitudD){
        $condicion = array(
                'Folio'         => $folio,
                'tabaco'        => $tabaco,
                'tabacoC'       => $tabacoC,
                'tabacoD'       => $tabacoD,
                'tabacoE'       => $tabacoE,
                'bebidas'       => $bebidas,
                'bebidasRazon'  => $bebidasRazon,
                'edadConsumo'   => $edadConsumo,
                'vi1'           => $vi1,
                'cl1'           => $cl1,
                'cr1'           => $cr1,
                'br1'           => $br1,
                'pu1'           => $pu1,
                'al1'           => $al1,
                'vi2'           => $vi2,
                'cl2'           => $cl2,
                'cr2'           => $cr2,
                'br2'           => $br2,
                'pu2'           => $pu2,
                'al2'           => $al2,
                'vi3'           => $vi3,
                'cl3'           => $cl3,
                'cr3'           => $cr3,
                'br3'           => $br3,
                'pu3'           => $pu3,
                'al3'           => $al3,
                'mayor'         => $mayor,
                'sustancia'     => $sustancia,
                'vecesD'        => $vecesD,
                'ultimaD'       => $ultimaD,
                'consecuenciasD'=> $consecuenciaD,
                'conocimientoD'  => $conocimiento,
                'cursoD'        => $cursoD,
                'actitudD'      => $actitudD
            );
        $this->db->insert('en_adicciones', $condicion);
    }


  /*  function avance($folio){
        $condicion = array(
                'Avance' => '1'
            );
        $this->db->where('Folio', $folio)
        $this->db->update('ab_folio', $condicion);
    }*/
}
?>