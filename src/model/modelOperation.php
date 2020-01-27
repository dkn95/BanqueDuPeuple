<?php  
	require_once 'bd.php';
	function getTypeOpByNom($nom){
		$sql = "SELECT * FROM typeoperation WHERE nom='$nom'";
		global $bd;
		return $bd -> query($sql) -> fetch(); 
	}
	function depot($numero, $dateOperation, $montant, $idCompte, $idTypeOp, $idUser){
		global $bd;
		$lastId = lastInsertIdForTable("operation") ;
		$sql = "INSERT INTO operation VALUES ('$lastId', '$numero','$dateOperation', $montant, $idCompte, $idTypeOp, $idUser, 1)";
		
		if($bd -> exec($sql) > 0){
			$sql1 = "UPDATE compte SET solde=solde+$montant WHERE id=$idCompte";
			return $bd -> exec($sql1);
		}

	}
	function genererNumeroOperation(){
        $sql = "SELECT max(id) FROM operation";
        global $bd;
        $array =  $bd -> query($sql) -> fetch();
        if($array == NULL){
            $id = 1;
        }else{
            $array[0]++;
            $id = $array[0];
        }
        $numero = "BDP_".date('d').date('m').date('Y')."_OP".$id;
        return $numero;
    } 
	function retrait($numero, $dateOperation, $montant, $idCompte, $idTypeOp, $idUser)
	{
		global $bd;
		$rep = $bd -> query('SELECT solde FROM compte WHERE id='.$idCompte.'');
		$solde = $rep -> fetch();
		if (($solde['solde'] - $montant) >= 500) {
			$lastId = lastInsertIdForTable("operation");
			$sql = "INSERT INTO operation VALUES ('$lastId', '$numero','$dateOperation', $montant, $idCompte, $idTypeOp, $idUser, 1)";
			if($bd -> exec($sql) > 0){
				$sql1 = "UPDATE compte SET solde=solde-$montant WHERE id=$idCompte";
				return $bd -> exec($sql1);
			}
		}
		else
		{
			return 0;
		}
	}
	function listOpByNomCompte($id){
		$sql= "SELECT O.id as idO,O.numero,O.dateOperation,O.montant,O.etatOp, U.*, T.nom as type FROM operation O,utilisateur U, typeoperation T WHERE O.idUser=U.id AND O.idTypeOpe = T.id AND O.idCompte = $id";
		global $bd;
		return $bd -> query($sql) -> fetchall();
	}
	function delete($idOp)
	{
		$sql = "SELECT solde FROM compte WHERE id=(SELECT idCompte FROM operation WHERE id='$idOp')";
		$sql2 = "SELECT O.montant, T.nom as type FROM operation O, typeoperation T WHERE O.idTypeOpe = T.id AND O.id='$idOp'";
		global $bd;
		$solde = $bd -> query($sql) -> fetch();
		$reponse = $bd -> query($sql2) -> fetch();
		$solde = $solde['solde'];
		$mnt = $reponse['montant'];
		$type = $reponse['type'];
		if ($type == "depot") {
			if (($solde - $mnt) >= 500){
			$sql = "UPDATE operation set etatOp = 0 where id='$idOp'";
			$sql2 = "UPDATE compte set solde = ($solde - $mnt) WHERE id = (SELECT idCompte FROM operation WHERE id = '$idOp')";
			}else{
				return 0;
			}
		}else{
		$sql = "UPDATE operation set etatOp = 0 where id='$idOp'";
		$sql2 = "UPDATE compte set solde = ($solde + $mnt) WHERE id = (SELECT idCompte FROM operation WHERE id = '$idOp')";
		}
		$bd -> exec($sql);
		$bd -> exec($sql2);
		return 1;
	}

?>