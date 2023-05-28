<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model");
		$this->load->model("Admin_model");
	}

	public function index(){
		//$this->load->view('usuario/verproductos');
		
		//$this->load->view('usuario/observar');
		//$this->load->view('usuario/vista');
		$this->load->view('usuario/principal');
		//$this->load->view('usuario/registrar');
		
	}
	public function loginusuario(){
	
		$this->load->view('usuario/login');
	}
	public function login_guardar(){
		$resultado =$this->Admin_model->registrar($_POST);
		if ($resultado){
			redirect(base_url().'');
		
		}else{
			echo 'No se pudo';	
		}
		var_dump($_POST);
		//$this->load->view('usuario/login');
	}
	/*public function principal_pagina()
	{
		$this->load->view('usuario/principal');
	}

	*/
	
	/*public function principal()
	{
		$this->load->view('usuario/principal');
	}
	*/
	public function ver_productos()	{
		
		$this->load->view('usuario/verproductos');
	}
	public function ver_formulario_registrar(){
		$this->load->view('usuario/registrar');
		
	}

	public function contactanos(){
		$this->load->view('usuario/contactanos');
	} 

	
	public function guardar_admin()
	{
		$username= $this->input->post('username');
		$psw= $this->input->post('psw');
		if($username=="juan david" && $psw=="123456"){
			$this->session->set_userdata('admin',$username);

		//	$usuario = array("username" => $resultado ['juan david']);
		//	$this->session->set_userdata("usuario", $usuario);



			redirect (base_url().'productos');
		}
		
		else{


			redirect (base_url().'login');
		}
		
	}
	
	public function ver_guardar_productos()	{
		
		$datos = array(
			'producto' =>$this->input->post('producto'),
			'precio' =>$this->input->post('precio')
			
		);
		$resultado =$this->Usuario_model->agregar_productos($datos);
		if ($resultado ['guardado'] == true){
			redirect(base_url().'productos');
		
		}
	}

	public function guardar_usuario()	{
		
		$datos = array(
			 'primer_nombre' =>$this->input->post('primer_nombre'),
			'segundo_nombre' =>$this->input->post('segundo_nombre'),
			'primer_apellido' =>$this->input->post('primer_apellido'),
			'segundo_apellido' =>$this->input->post('segundo_apellido'),
			'identificacion'=>$this->input->post('identificacion'),
			'correo' =>$this->input->post('correo'),
			'telefono' =>$this->input->post('telefono'),
			'fecha' => date('Y-m-d'),
			'direccion' =>$this->input->post('direccion'),
			'forma_de_pago' =>$this->input->post('forma_de_pago'),
			'cantidad'=>$this->input->post('cantidad'),
			'producto'=>$this->input->post('producto')
		);
		$resultado =$this->Usuario_model->agregar_persona($datos);
		if ($resultado ['guardado'] == true){
			redirect (base_url().'');
			
		}

		//$this->load->view('usuario/registrar');
		//Verificar si se agregaron los datos
//	if($this->Usuario_model->agregar( $this->input->post() ) )

		//redireccionar a una ruta
		

		
		//$this->Usuario_model->ultimo_id_agregado();
		//redirect(base_url().'observar-tienda');
	
	
	
}
}


	
