<?php 
	require_once 'bd.php';
	function getClientByIdCompte($idCompte)
	{
		$sql = "SELECT Cl.* from client Cl, compte Cp where Cp.idClient = Cl.id AND Cp.id = '$idCompte'";
		global $bd;
		return $bd -> query($sql) -> fetch();
	}
	function getAllClients()
	{
		$sql = "SELECT * from client";
		global $bd;
		return $bd -> query($sql) -> fetchAll();
	}
	function getClientByCni($cni)
	{
		$sql = "SELECT * from client where cni='$cni'";
		global $bd;
		return $bd -> query($sql) -> fetch();
	}
 ?>