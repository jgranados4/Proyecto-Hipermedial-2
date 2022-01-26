<?php
//require_once indica que archivo es requerido para esta clase
require_once("conexion.php");
Class producto {

	public function ObtenerTodos(){
		$conexion=new Conexion;
		//Se envía el nombre de la tabla que va a ser consultada
		$producto=$conexion->consultar('tbproducto');
		return $producto;
	}

	public function nuevo($datos){
		$conexion=new Conexion;
		$producto=$conexion->insertar('tbproducto',$datos);
		return $producto;
	}

	public function Guardar($datos,$filtro){
		$conexion=new Conexion;
		$producto=$conexion->actualizar('tbproducto',$datos,$filtro);
		return $producto;
	}
	
	public function ObtenerFiltro($filtro){
		$conexion=new Conexion;
		$producto=$conexion->consultarFiltro('tbproducto',$filtro);
		return $producto;
	}
}
?>