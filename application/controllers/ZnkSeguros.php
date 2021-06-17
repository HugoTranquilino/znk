<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ZnkSeguros extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
    {
		$data = '';
        $content = $this->load->view('znkseguros_v', $data, TRUE);
        $datos_vista = array('content' => $content);
        $this->load->view('template', $datos_vista);
    }

	public function cotizador(){
		if(array_key_exists('tipoSeguro', $_GET)){
			$tipoSeguro = base64_decode($_GET["tipoSeguro"]);
			if($tipoSeguro != null){
				// ====== Remplazar por modelo ======
				$data['tipoSeguro'] = $tipoSeguro;
				$data['genero'] = array(	
					0 => array(
						'idGenero' => 1,
						'descGenero'  => "Masculino"
					),
					1 => array(
						'idGenero' => 2,
						'descGenero'  => "Femenino"
					)
				);
				$data['cobertura'] = array(	
					0 => array(
						'idGenero' => 1,
						'descGenero'  => "Nacional"
					),
					1 => array(
						'idGenero' => 2,
						'descGenero'  => "Internacional"
					)
				);
				$data['nivelHospitalario'] = array(	
					0 => array(
						'idGenero' => 1,
						'descGenero'  => "Alto"
					),
					1 => array(
						'idGenero' => 2,
						'descGenero'  => "Medio"
					)
				);
				$content = $this->load->view('znkCotizador_v', $data, TRUE);
				$datos_vista = array('content' => $content);
				$this->load->view('template', $datos_vista);


			}
		} else {
			echo "No existo";
		}
        // $content = $this->load->view('znkseguros_v', $data, TRUE);
        // $datos_vista = array('content' => $content);
        // $this->load->view('template', $datos_vista);

	}

	public function saveGastosMedicos(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveHogar(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveAuto(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}
	
	public function saveNegocio(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveRetiro(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveVida(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveHclave(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function saveautoform()
	{
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function modelo_auto()
	{
		if(array_key_exists('tipoAuto', $_POST)){
			if (isset($_POST['tipoAuto']) and $_POST['tipoAuto'] != null){
				// consulta a la base de datos
				echo '<option value="" selected disabled></option>
					<option value="1">2010</option>
					<option value="2">2011</option>
					<option value="3">2013</option>
					<option value="4">2014</option>';
			}else{
				echo 'tipo de auto no seleccionado';
			}
		}else{
			echo 'no existe la llave';
		}
	}
	
	public function marca_auto()
	{
		if(array_key_exists('modeloAuto', $_POST)){
			if (isset($_POST['modeloAuto']) and $_POST['modeloAuto'] != null){
				// consulta a la base de datos
				echo '<option value="" selected disabled></option>
					<option value="1">ACURA</option>
					<option value="2">BMW</option>
					<option value="3">BUIK</option>
					<option value="4">CADILAC</option>
					<option value="5">CHEVROLET</option>
					<option value="6">CHRYSLER</option>';
			}else{
				echo 'valor no seleccionado';
			}
		}else{
			echo 'key not exist';
		}
	}

	public function submarca_auto()
	{
		if(array_key_exists('marcaAuto', $_POST)){
			if (isset($_POST['marcaAuto']) and $_POST['marcaAuto'] != null){
				// consulta a la base de datos
				echo '<option value="" selected disabled></option>
					<option value="1">AVEO</option>
					<option value="2">CAMARO</option>
					<option value="3">CAPTIVA</option>
					<option value="4">CRUZE</option>
					<option value="5">MALIBU</option>
					<option value="6">SPARK</option>';
			}else{
				echo 'valor no seleccionado';
			}
		}else{
			echo 'key not exist';
		}
	}

	public function version_auto()
	{
		if(array_key_exists('submarcaAuto', $_POST)){
			if (isset($_POST['submarcaAuto']) and $_POST['submarcaAuto'] != null){
				// consulta a la base de datos
				echo '<option value="" selected disabled></option>
					<option value="1">CH CHEVROLET CAMARO CONVERTIBLE SS VP RA-20 AUTOMATICA</option>
					<option value="2">CH CHEVROLET CAMARO HOTWHEELS SPOILER AUTOMATICA 2</option>
					<option value="3">CH CHEVROLET CAMARO LT VP QC RA-19 AUTOMATICA 2PTA</option>
					<option value="4">CH CHEVROLET CAMARO SS VP QC RA-20 AUTOMATICA 2PTA</option>
					<option value="5">CH CHEVROLET CAMARO SS VP QC RA-20 ESTANDAR 2PTAS</option>
					<option value="6">CH CHEVROLET CAMARO ZL1 ESTANDAR 2PTAS</option>';
			}else{
				echo 'valor no seleccionado';
			}
		}else{
			echo 'key not exist';
		}
	}
}
