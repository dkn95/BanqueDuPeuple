<?php 
session_start();
	require_once '../model/modelOperation.php';
	require_once '../model/modelCompte.php';

	if (isset($_POST['ajoutOp'])) {
		extract($_POST);
		$dateCreation = date("d-m-Y");
		$numeroOp = genererNumeroOperation();
		$idGestCompte = $_SESSION['idUser'];
		$idTypeOperation = getTypeOpByNom($typeOperation)['id'];
		$idCompte = $_GET['idCompte'];
		if ($typeOperation == 'depot') {
			if(depot($numeroOp, $dateCreation, $montant, $idCompte, $idTypeOperation, $idGestCompte) > 0)
			{
				$operations = listOpByNomCompte($idCompte);
				$_SESSION['operations'] = $operations;
				header('location:/BanqueDuPeuple/src/view/indexFinance.php?view=operation&ok=1&op=1');
			}else{
				header('location:/BanqueDuPeuple/src/view/indexFinance.php?view=operation&ok=1&op=0');
			}
		}
		if ($typeOperation == 'retrait') {
			if(retrait($numeroOp, $dateCreation, $montant, $idCompte, $idTypeOperation, $idGestCompte) > 0)
			{
				$operations = listOpByNomCompte($idCompte);
				$_SESSION['operations'] = $operations;	
				header('location:/BanqueDuPeuple/src/view/indexFinance.php?view=operation&ok=1&op=1');
			}else{
				header('location:/BanqueDuPeuple/src/view/indexFinance.php?view=operation&ok=1&op=0');
			}
		}
	}
	if (isset($_GET['delete'])) {
		$idOp = $_GET['delete'];
		$numCompte = getNumCompteByIdOp($idOp);
		if(delete($idOp) == 0){
			header('location:/BanqueDuPeuple/src/view/indexFinance.php?view=operation&ok=1&del=0');
		}else{
			header('location:/BanqueDuPeuple/src/controller/compteController.php?num='.$numCompte["numero"].'');
		}
	}
 ?>