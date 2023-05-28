<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
{

	function __construct(){
	//	parent::__construct();
		$this->load->model("Usuario_model");
	}

	public function index()
	{
		//$this->load->view('usuario/verproductos');
		
		$this->load->view('usuario/observar');
		//$this->load->view('usuario/registrar');
		
	}
	public function ver_productos()
	{
		
		$this->load->view('usuario/verproductos');
	}
	public function ver_formulario_registrar()
	{
		$this->load->view('usuario/registrar');
		
	}
	public function usuarios(){
		$this->load->view('Usuario/usuarios');
		
	}	
	public function guardar_usuario()
	{
		
		$this->load->view('usuario/observar');
		//Verificar si se agregaron los datos
	if($this->Usuario_model->agregar( $this->input->post() ) ){
		//redireccionar a una ruta
		

		
		$this->Usuario_model->ultimo_id_agregado();
		//redirect(base_url().'observar-tienda');
	}

	
	}
	public function guardar_admin(){
		if ($this->input->post("contraseña") == $this->input->post("contraseña")){
			//verificar si el usuario ya está registrado
			if($this->Usuario_model->verificar_admin_existe($this->input->post('contrseña'))){
				
				$error = array("error_admin" => true);
				$datos_a_retornar = array_merge($error, $this->input->post());
				$this->load->view('admin/registro', $datos_a_retornar);

			}else {
					//Verificar si se agregaron los datos
				if($this->Usuario_model->agregar2( $this->input->post() ) ){
					//redireccionar a una ruta
					redirect(base_url());
				}
			
			}

		}else{
			$error = array("error_contra" => true);
			$datos_a_retornar = array_merge($error, $this->input->post());
			$this->load->view('admin/registro', $datos_a_retornar);
        }
	}
	
}
