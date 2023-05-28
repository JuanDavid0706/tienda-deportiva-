<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Usuario_model extends CI_Model
	{


		public function agregar($datos){
			$datos = array(
				'primer_nombre' => $datos['primer_nombre'],
				'segundo_nombre' => $datos['segundo_nombre'],
				'primer_apellido' => $datos['primer_apellido'],
				'segundo_apellido' => $datos['segundo_apellido'],
				'identificacion' =>$datos['identificacion'],
				'correo' => $datos['correo'],
				'telefono' => $datos['telefono'],
				'fecha' => date('Y-m-d'),
                'direccion' =>$datos['direccion'],
                'forma_de_pago' =>$datos['forma_de_pago'],
                'cantidad'=>$datos['cantidad'],
                'producto'=>$datos['producto'],
			);

		$this->db->insert('usuario', $datos);
			//echo $this->db->last_query();
			
		}

		public function ultimo_id_agregado()
		{
            return $this->db->insert_id();
        }

		public function verificar_usuario_existe($identificacion)
		{
			//buscar si el usuario existe
			$result = $this->db->get_where('usuario', array(
				'numero_de_identificacion' => $identificacion
			));
			echo $this->db->last_query();
			//verificar si existe el dato
			if($result->result()){
				return true;
			}else{
				return false;
			}
		}
		


			public function agregar2($datos)
			{
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
    

