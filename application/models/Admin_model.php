<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->library("mongodb");
			$this->db = $this->mongodb->db()->persona;
			$this->db2=$this->mongodb->db()->productos;
			$this->db3=$this->mongodb->db()->registro_usuarios;
		}

		public function registrar($data){
			$datos = array(
				'nombre' => $data['nombre'],
				'correo' => $data['usuario'],
				'contraseña' => $data['contraseña'],
				//'fecha_registro' => date('Y-m-d'),
			);
			$result = $this->db3->insertOne(array('nombre'=>$data ['nombre'],'usuario'=>$data['usuario'],'contraseña'=>md5($data['contraseña'])));
			if($result){
				return true;
			}else{
				return false;
			}
		
		}
		public function agregar($datos){
			$datos = array(
				'nombres' => $datos['nombres'],
				'apellidos' => $datos['apellidos'],
				'cedula' =>$datos['cedula'],
				'correo' => $datos['correo'],
				'contraseña' => $datos['contraseña'],
				//'fecha_registro' => date('Y-m-d'),
			);

			return $this->db->insert('admin', $datos);
			
		}
		public function listar(){
            return $this->db->find(array());
        }
		public function listar2(){
            return $this->db2->find(array());
        }
		public function listar3(){
            return $this->db3->find(array());
        }
		public function verificar_admin_existe($cedula){
			//buscar si el usuario existe
			$result = $this->db->get_where('admin', array(
				'cedula' => $cedula
			));
			//echo $this->db->last_query();
			//verificar si existe el dato
			if($result->result()){
				return true;
			}else{
				return false;
			}
		}

		public function eliminar($producto_id)
		{
			$resultado = $this->db2->deleteOne([
				'producto' =>$producto_id
			]) ;

			return $resultado;
		}
		public function eliminar2($identificacion_id)
		{
			$resultado = $this->db->deleteOne([
				'identificacion' =>$identificacion_id
			]) ;

			return $resultado;
		}

		public function eliminar3($identificacion_id)
		{
			$resultado = $this->db3->deleteOne([
				"_id" =>  $this->mongodb->getObjetId($identificacion_id)
			]) ;

			return $resultado;
		}
		public function buscando($usuario_id){
            try {
                $resultado = $this->db2->findOne(array(
                    "_id" =>  $this->mongodb->getObjetId($usuario_id)
                ));
                return $resultado;
            //capturar errores 
            } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
                return null;
            }
        }
        function editar($usuario_id, $datos){
            $resultado = $this->db2->updateOne(
                array(
                    "_id" =>  $this->mongodb->getObjetId($usuario_id)
                ),
                array(  
                    '$set' => $datos
                )
            );
            return $resultado->getModifiedCount();
        }
		
		/*public function buscando($producto_id)
		{
		
		$resultado=$this->db2->findOne(array( "producto"=>$this->mongodb->findOne($producto_id)
		
		));
		return $resultado;
	}*/
	
		
		
		public function autenticar($correo, $contraseña){
			$result = $this->db->get_where('admin', array(
				'correo' => $correo,
				'contra' => $contraseña
			));
			
			if($result->result()){
				return true;
			}else{
				return false;
			}
		}
		
	}