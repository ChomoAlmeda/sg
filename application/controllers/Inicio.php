<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	function __construct() {
		parent::__construct();

	}
   	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

   	//index() pide usuario y contraseña para poder entrar al sistema
	public function index()
	{			
		if($_POST){
			$nombre = $this->input->post('Nombre');
			$contra = $this->input->post('Contra');
			$usuario = $this->Inicio_model->comprobar($nombre, $contra);
			if($usuario -> num_rows() > 0){
				foreach($usuario -> result() as $row){
					$IdUsuario	= $row->IdUsuario;
					$Tipo		= $row->Tipo;
					$datos['IdUsuario'] = $IdUsuario;
					$datos['Tipo']		= $Tipo;
					$this->load->view('estructura/head1');
					$this->load->view('comprobar', $datos);
					$this->load->view('estructura/foot1');
				}
			}else{
				$this->load->view('estructura/head1');
				$this->load->view('entrada');
				$this->load->view('estructura/foot1');
			}
			

		}else{
			$this->load->view('estructura/head1');
			$this->load->view('entrada');
			$this->load->view('estructura/foot1');
		}
	}

	//principal ($id) una vez que se ingresaron los datos, muestra la ultima requisicion del usuario
	public function principal($id)
	{	

		$datos['folios']=$this->Inicio_model->folios();
		$this->load->view('estructura/head');
		$this->load->view('usuario/principal', $datos);
		$this->load->view('estructura/foot1');
	}

	public function folio()
	{
		$hoy	= date('Y-m-d');
		$folio = $this->input->post('Folio');
		$this->Inicio_model->folioN($folio,'1');
		$datos['folio'] = $folio;
		$this->load->view('usuario/redirect', $datos);
	}

	public function personales($folio){
		$datos['folio'] = $folio;
		if($_POST){
			$tipo 			= $this->input->post('Tipo');
			$integrantes	= $this->input->post('Integrantes');
			$datos['integrantes'] = $integrantes;
			$this->Inicio_model->personales($folio, $tipo, $integrantes);
			$this->load->view('usuario/redirectP', $datos);
		}else{
			$this->load->view('estructura/head');
			$this->load->view('usuario/personales', $datos);
			$this->load->view('estructura/foot1');
		}

	}

	public function dependientes($a, $folio){
		$datos['folio'] = $folio;
		$datos['a']		= $a;
		if($_POST){
			$parentesco 	= $this->input->post('parentesco');
			$sexo 			= $this->input->post('sexo');
			$edad 			= $this->input->post('edad');
			$escolaridad 	= $this->input->post('escolaridad');
			$ocupa 			= $this->input->post('ocup');
			$lugar			= $this->input->post('lugar');
			$estado 		= $this->input->post('estado');
			$le 			= $this->input->post('le');
			$this->Inicio_model->dependientes($folio, $parentesco, $sexo, $edad, $escolaridad, $ocupa, $lugar, $estado, $le);
			$datos['dependientes'] = $this->Inicio_model->verD($folio);
			$this->load->view('estructura/head');
			$this->load->view('usuario/mas', $datos);
			$this->load->view('estructura/foot1');
		}else{
			$datos['dependientes'] = $this->Inicio_model->verD($folio);
			
			$this->load->view('estructura/head');
			$this->load->view('usuario/dependientes', $datos);
			$this->load->view('estructura/foot1');
		}
	}

	public function vivienda($folio){
		$datos['folio'] = $folio;
		if($_POST){
			$ubicacion 		= $this->input->post('Ubicacion');
			$tipo			= $this->input->post('Tipo');
			$documento		= $this->input->post('Documento');
			$matParedes		= $this->input->post('matParedes');
			$matTecho		= $this->input->post('matTecho');
			$matPiso		= $this->input->post('matPiso');
			$superficie		= $this->input->post('Superficie');
			$construccion	= $this->input->post('Construccion');
			$habitaciones	= $this->input->post('Habitaciones');
			$recamaras		= $this->input->post('Recamaras');
			$banos			= $this->input->post('Banos');
			$cocina			= $this->input->post('Cocina');
			$sala			= $this->input->post('Sala');
			$otros 			= $this->input->post('Otros');
			$perdorm		= $this->input->post('perDorm');
			$servAgua		= $this->input->post('servAgua');
			$servElect		= $this->input->post('servElect');
			$servDrenaje	= $this->input->post('servDrenaje');
			$servMedidor	= $this->input->post('servMedidor');
			$servPaga		= $this->input->post('servPaga');
			$servPostal		= $this->input->post('servPostal');
			$servTelefono	= $this->input->post('servTelefono');
			$servCompu		= $this->input->post('servCompu');
			$combustible	= $this->input->post('Combustible');
			$animalesc		= $this->input->post('animalesC');
			$animales		= $this->input->post('Animales');
			$faunac			= $this->input->post('faunaC');
			$fauna			= $this->input->post('Fauna');
			$this->Inicio_model->vivienda($folio, $ubicacion, $tipo, $documento, $matParedes, $matTecho, $matPiso, $superficie, $construccion, $habitaciones, $recamaras, $banos, $cocina, $sala, $otros, $perdorm, $servAgua, $servElect, $servDrenaje, $servMedidor, $servPaga, $servPostal, $servTelefono, $servCompu, $combustible, $animalesc, $animales, $faunac, $fauna);
			$datos['seccion'] = 'familiar';
			$this->load->view('redirect', $datos);
		}else{
			//$this->Inicio_model->avance($folio);
			$this->load->view('estructura/head');
			$this->load->view('usuario/vivienda', $datos);
			$this->load->view('estructura/foot1');
		}
	}

	public function familiar($folio){
		$datos['folio'] = $folio;
		if($_POST){
			$educacion 		= $this->input->post('Educacion');
			$edup			= $this->input->post('Edup');
			$sancion		= $this->input->post('Sancion');
			$relPareja 		= $this->input->post('relPareja');
			$relHijos 		= $this->input->post('relHijos');
			$relPadres		= $this->input->post('relPadres');
			$relHermanos	= $this->input->post('relHermanos');
			$relAbuelos		= $this->input->post('relAbuelos');
			$relOtros		= $this->input->post('relOtros');
			$actividades	= $this->input->post('Actividades');
			$horas			= $this->input->post('Horas');
			$llamados		= $this->input->post('llamados');
			$situacion		= $this->input->post('situacion');
			$sitP 			= $this->input->post('Sitp');
			$ingresos		= $this->input->post('Ingresos');
			$alimentacion	= $this->input->post('Alimentacion');
			$vestido		= $this->input->post('Vestido');
			$vivienda 		= $this->input->post('Vivienda');
			$salud			= $this->input->post('Salud');
			$educacion1		= $this->input->post('Educacion1');
			$diversion		= $this->input->post('Diversion');
			$bebidas		= $this->input->post('Bebidas');
			$ahorro			= $this->input->post('Ahorro');
			$otro 			= $this->input->post('Otro');
			$this->Inicio_model->familiar($folio, $educacion, $edup, $relPareja, $relHijos, $relPareja, $relHijos, $relPadres, $relHermanos, $relAbuelos, $relOtros, $actividades, $horas, $llamados, $situacion, $sitP, $ingresos, $alimentacion, $vestido, $vivienda, $salud, $educacion1, $diversion, $bebidas, $ahorro, $otro);
			$datos['seccion'] = 'salud';
			$this->load->view('redirect', $datos);
		}else{
			$this->load->view('estructura/head');
			$this->load->view('usuario/familiar', $datos);
			$this->load->view('estructura/foot1');
		}
	}

	public function salud($folio){
		$datos['folio'] = $folio;
		if($_POST){
			$servicios 	= $this->input->post('Servicios');
			$Frecuencia = $this->input->post('Frecuencia');
			$eFrecuentes= $this->input->post('eFrecuentes');
			$cPadres 	= $this->input->post('cPadres');
			$edad1 		= $this->input->post('Edad1');
			$sexo1	 	= $this->input->post('sexo1');
			$soltero1 	= $this->input->post('soltero1');
			$edad2		= $this->input->post('Edad2');
			$sexo2		= $this->input->post('sexo2');
			$soltero2	= $this->input->post('soltero2');
			$edad3		= $this->input->post('Edad3');
			$sexo3		= $this->input->post('sexo3');
			$soltero3	= $this->input->post('soltero3');
			$edad4		= $this->input->post('Edad4');
			$sexo4		= $this->input->post('edad4');
			$soltero4	= $this->input->post('soltero4');
			$edad5		= $this->input->post('Edad5');
			$sexo5		= $this->input->post('sexo5');
			$soltero5	= $this->input->post('soltero5');
			$mPlanificacion = $this->input->post('mPlanificacion');
			$dsi 		= $this->input->post('discapacidad');
			$sexodisc	= $this->input->post('sexoDisc');
			$tipodisc	= $this->input->post('tipoDisc');
			$asi		= $this->input->post('aSi');

			$this->Inicio_model->salud($folio, $servicios, $Frecuencia, $eFrecuentes, $cPadres, $edad1, $sexo1, $soltero1, $edad2,  $sexo2,  $soltero2, $edad3, $sexo3, $soltero3, $edad4, $sexo4, $soltero4, $edad5, $sexo5, $soltero5, $mPlanificacion, $dsi, $sexodisc, $tipodisc, $asi);
			$datos['seccion'] = 'comunidad';
			$this->load->view('redirect', $datos);

		}else{
			$this->load->view('estructura/head');
			$this->load->view('usuario/salud', $datos);
			$this->load->view('estructura/foot1');			
		}

	}

	public function comunidad($folio){
		$datos['folio'] = $folio;
		if($_POST){
			$servelectD		= $this->input->post('servElectD');
			$servelect 		= $this->input->post('servElect');
			$comentelect 	= $this->input->post('comentElect');
			$servaguaD		= $this->input->post('servAguaD');
			$servagua 		= $this->input->post('servAgua');
			$comentagua 	= $this->input->post('comentAgua');
			$servtelD		= $this->input->post('servTelD');
			$servtel 		= $this->input->post('servTel');
			$comenttel 		= $this->input->post('comentTel');
			$servrecoD		= $this->input->post('servRecoD');
			$servreco		= $this->input->post('servReco');
			$comentreco		= $this->input->post('comentReco');
			$servgasD		= $this->input->post('servGasD');
			$servgas		= $this->input->post('servGas');
			$comentgas		= $this->input->post('comentGas');
			$servpolD		= $this->input->post('servPolD');
			$servpol 		= $this->input->post('servPol');
			$comentpol 		= $this->input->post('comentPol');
			$servtransD		= $this->input->post('servTransD');
			$servtrans		= $this->input->post('servTrans');
			$comentTrans	= $this->input->post('comentTrans');
			$servrecreD		= $this->input->post('servRecreD');
			$servrecre		= $this->input->post('servRecre');
			$comentrecre	= $this->input->post('comentRecre');
			$servdepD		= $this->input->post('servDepD');
			$servdep		= $this->input->post('servDep');
			$comentdep		= $this->input->post('comentDep');
			$servsaludD		= $this->input->post('servSaludD');
			$servsalud		= $this->input->post('servSalud');
			$comentsalud	= $this->input->post('comentSalud');
			$servVialD		= $this->input->post('servVialD');
			$servvial		= $this->input->post('servVial');
			$comentvial		= $this->input->post('comentVial');
			$servAlumD		= $this->input->post('servAlumD');
			$servalum		= $this->input->post('servAlum');
			$comentalum		= $this->input->post('comentAlum');
			$basura			= $this->input->post('basura');
			$problemas1		= $this->input->post('problemas1');
			$problemas2		= $this->input->post('problemas2');
			$problemas3		= $this->input->post('problemas3');
			$opinion		= $this->input->post('opinion');
			$municipales	= $this->input->post('municipales');
			$negocio		= $this->input->post('negocio');
			$this->Inicio_model->comunidad($folio,$servelect, $comentelect, $servagua, $comentagua, $servtel, $comenttel, $servreco, $comentreco, $servgas, $comentgas, $servpol, $comentpol, $servtrans, $comentTrans, $servrecre, $comentrecre, $servdep, $comentdep, $servsalud, $comentsalud, $servvial, $comentvial, $servalum, $comentalum, $basura, $problemas1, $problemas2, $problemas3, $opinion, $municipales, $negocio, $servelectD, $servaguaD, $servtelD, $servrecoD, $servgasD, $servpolD, $servtransD, $servrecreD, $servdepD, $servsaludD, $servVialD, $servAlumD);
			$datos['seccion'] = 'cultura';
			$this->load->view('redirect', $datos);
		}else{
			$this->load->view('estructura/head');
			$this->load->view('usuario/comunidad', $datos);
			$this->load->view('estructura/foot1');	
		}
	}

	public function cultura($folio){
		$datos['folio'] = $folio;
			if($_POST){
				$religion 	= $this->input->post('religion');
				$fsi		= $this->input->post('fSi');
				$nombre1 	= $this->input->post('nombre1');
				$fecha1		= $this->input->post('fecha1');
				$nombre2 	= $this->input->post('nombre2');
				$fecha2 	= $this->input->post('fecha2');
				$nombre3 	= $this->input->post('nombre3');
				$fecha3		= $this->input->post('fecha3');
				$lsi 		= $this->input->post('lSi');
				$tipol		= $this->input->post('tipoL');
				$this->Inicio_model->culturales($folio, $religion, $fsi, $nombre1, $fecha1, $nombre2, $fecha2, $nombre3, $fecha3, $lsi, $tipol);
				$datos['seccion'] = 'historial';
				$this->load->view('redirect', $datos);

			}else{
				$this->load->view('estructura/head');
				$this->load->view('usuario/cultura', $datos);
				$this->load->view('estructura/foot1');	
			}
	}

		public function historial($folio){
		$datos['folio'] = $folio;
			if($_POST){
				$estado 	= $this->input->post('Estado');
				$municipio 	= $this->input->post('Municipio');
				$comunidad 	= $this->input->post('Comunidad');
				$anios		= $this->input->post('Anios'); 
				$osi		= $this->input->post('oSi');
				$oa 		= $this->input->post('oA');
				$ob 		= $this->input->post('oB');
				$oc 		= $this->input->post('oC');
				$od 		= $this->input->post('oD');
				$oe 		= $this->input->post('oE');

				$this->Inicio_model->historial($folio, $estado, $municipio, $comunidad, $anios, $osi,$oa , $ob, $oc, $od, $oe);
				$datos['seccion'] = 'adicciones';
				$this->load->view('redirect', $datos);
			}else{
				$this->load->view('estructura/head');
				$this->load->view('usuario/historial', $datos);
				$this->load->view('estructura/foot1');
			}
	
		}

		public function adicciones($folio){
			$datos['folio'] = $folio;
				if($_POST){
					echo $folio;
					$tabaco 		= $this->input->post('tabaco');
					$tabacoC 		= $this->input->post('tabacoC');
					$tabacoD		= $this->input->post('tabacoD');
					$tabacoE		= $this->input->post('tabacoE');
					$bebidas		= $this->input->post('bebidas');
					$bebidasRazon	= $this->input->post('bebidasRazon');
					$edadConsumo	= $this->input->post('edadConsumo');
					$vi1			= $this->input->post('vi1');
					$cl1			= $this->input->post('cl1');
					$cr1			= $this->input->post('cr1');
					$br1			= $this->input->post('br1');
					$pu1			= $this->input->post('pu1');
					$al1			= $this->input->post('al1');
					$vi2			= $this->input->post('vi2');
					$cl2			= $this->input->post('cl2');
					$cr2			= $this->input->post('cr2');
					$br2			= $this->input->post('br2');
					$pu2			= $this->input->post('pu2');
					$al2			= $this->input->post('al2');
					$vi3			= $this->input->post('vi3');
					$cl3			= $this->input->post('cl3');
					$cr3			= $this->input->post('cr3');
					$br3			= $this->input->post('br3');
					$pu3			= $this->input->post('pu3');
					$al3			= $this->input->post('al3');
					$mayor			= $this->input->post('mayor');
					$sustancia		= $this->input->post('sustancia');
					$vecesD			= $this->input->post('vecesD');
					$ultimaD		= $this->input->post('ultimaD');
					$consecuenciaD	= $this->input->post('consecuenciasD');
					$conocimiento	= $this->input->post('conocimiento');
					$cursoD			= $this->input->post('cursoD');
					$actitudD		= $this->input->post('actitudD');
					$this->Inicio_model->adicciones($folio, $tabaco, $tabacoC, $tabacoD, $tabacoE, $bebidas, $bebidasRazon, $edadConsumo, $vi1, $cl1, $cr1, $br1, $pu1, $al1, $vi2, $cl2, $cr2, $br2, $pu2, $al2, $vi3, $cl3, $cr3, $br3, $pu3, $al3, $mayor, $sustancia, $vecesD, $ultimaD, $consecuenciaD, $conocimiento, $cursoD, $actitudD);
					$datos['seccion'] = 'principal';
					$this->load->view('redirect', $datos);
				}else{
					$this->load->view('estructura/head');
					$this->load->view('usuario/adicciones', $datos);
					$this->load->view('estructura/foot1');
				}
				
		}
}
