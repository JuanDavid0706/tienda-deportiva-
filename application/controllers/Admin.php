<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("Admin_model");
	}

    public function index()
    {
		$datos = array(
            'usuarios' =>  $this->Admin_model->listar(),
			'usuarios_reg' =>  $this->Admin_model->listar3()
        );

        $this->load->view("admin/panel",$datos);
    }
	public function registrarp(){
		$this->load->view('admin/registrarp');
	}

	public function login(){
		if(
			isset($_SESSION['admin'])
		)
		{
			redirect(base_url().'productos');
		}
		else{
			$this->load->view('admin/login');

		}
	}

	public function gestionar_articulo_eliminar()
	{

		$producto=$_GET['producto'];
		
	 $resultado = $this->Admin_model->eliminar($producto);

	  if ($resultado){

		$this->session->set_userdata('Eliminacion_ok',true);
		  redirect(base_url().'productos');
	  }
	}

	public function gestionar_usuario_eliminar()
	{

		$producto=$_GET['identificacion'];
		
	 $resultado = $this->Admin_model->eliminar3($producto);

	  if ($resultado){

		$this->session->set_userdata('Eliminacion_ok',true);
		  redirect(base_url().'panel');
	  }
	}

	public function gestionar_pedido_eliminar()
	{

		$producto=$_GET['identificacion'];
		
	 $resultado = $this->Admin_model->eliminar2($producto);

	  if ($resultado){

		$this->session->set_userdata('Eliminacion_ok',true);
		  redirect(base_url().'panel');
	  }
	}

	public function ver_buscando($usuario_id){
		
		$resultado = $this->Admin_model->buscando($usuario_id);

		$this->load->view("admin/editar", array('usuario' => $resultado));
	}
	public function ver_editar(){

		$datos = array(
		"producto" => $this->input->post("producto"),
		"precio" => $this->input->post("precio")
		);
		
		$resultado = $this->Admin_model->editar($this->input->post("_id"), $datos);


		if ($resultado > 0){
			$this->session->set_flashdata('modificacion_usuario',true);
			redirect(base_url()."productos");
		}
	}
	
	/*public function gestionar_articulo_buscar($producto_id)
	{

		$resultado = $this->Admin_model->buscar($producto_id);
		$this->load->view("admin/editar");
	}
*/	

	public function productos()
	{
		
		if(
		!isset($_SESSION['admin']))
	{
		redirect(base_url().'login');
	}
	else{
		
		$datos = array(
		'productos' =>  $this->Admin_model->listar2()
		);
		
	
		$this->load->view("admin/productos",$datos);
		
	}

}
public function salir(){
	$this->session->unset_userdata('admin');
	//borrar los datos de sesion
	redirect(base_url().'login');
	
}


    public function registro_admin()
	{
		$this->load->view('admin/registroadmin');
	}
	//public function ver_consolidado ()
	//{
	//	$this->load->view('admin/consolidados/ver-consolidado');
	//}
	
	
    public function guardar_admin2(){
		if ($this->input->post("contraseña") == $this->input->post("contraseña")){
			//verificar si el usuario ya está registrado
			if($this->Admin_model->verificar_admin_existe($this->input->post('contraseña'))){
				
				$error = array("error_admin" => true);
				$datos_a_retornar = array_merge($error, $this->input->post());
				$this->load->view('usuario/registro', $datos_a_retornar);

			}else {
					//Verificar si se agregaron los datos
				if($this->Admin_model->agregar( $this->input->post() ) ){
					//redireccionar a una ruta
					redirect(base_url().'login-admin');
				}
			
			}

		}else{
			$error = array("error_contra" => true);
			$datos_a_retornar = array_merge($error, $this->input->post());
			$this->load->view('admin/registro', $datos_a_retornar);
        }
    }
}
    
