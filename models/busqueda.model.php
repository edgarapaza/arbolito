<?php
require "Conexion.php";

class Busqueda
{

	private $conn;

	function __construct()
	{
		$this->conn = new Conexion();
		return $this->conn;

	}

	function Listado()
	{ // Lista solo los 20 primeros
		$sql = "SELECT iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio FROM datos LIMIT 20;";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}

	function Otorgante($otor)
	{
		$sql = "SELECT iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio FROM datos WHERE otorgante like '%$otor%';";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}
	function Favorecido($favor)
	{
		$sql = "SELECT iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio FROM datos WHERE favorecido like '%$favor%';";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}
	function Fecha($fecha)
	{
		$sql = "SELECT iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio FROM datos WHERE fecha = '$fecha';";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}
	function Bien($subserie)
	{
		$sql = "SELECT iddatos, subserie, lugar, fecha, otorgante, favorecido, protocolo, escritura, folio FROM datos WHERE subserie like '%$subserie%';";
		$data = $this->conn->ConsultaCon($sql);
		return $data;
	}
}
