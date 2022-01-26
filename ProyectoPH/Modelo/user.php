<?php
//require_once indica que archivo es requerido para esta clase
require_once("conexion.php");
Class Usuario {
	
	public function ObtenerTodos(){
		$conexion=new Conexion;
		//Se envía el nombre de la tabla que va a ser consultada
		$usuario=$conexion->consultar('tbusuario');
		return $usuario;
	}
	
	public function nuevo($datos){
		$conexion=new Conexion;
		$usuario=$conexion->insertar('tbusuario',$datos);
		return $usuario;
	}

	public function Guardar($datos,$filtro){
		$conexion=new Conexion;
		$producto=$conexion->actualizar('tbusuario',$datos,$filtro);
		return $producto;
	}

	public function ObtenerFiltro($filtro){
		$conexion=new Conexion;
		$usuario=$conexion->consultarFiltro('tbusuario',$filtro);
		return $usuario;
	}

	public function UsuarioExiste($usuario){
		$conexion = new Conexion;
		$usuario = $conexion->consultarUsuario('tbusuario',$usuario);
		return $usuario;
	}
}
?>