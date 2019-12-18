<?php
	session_start();
	require_once '../model/modelCompte.php';
	require_once '../model/modelOperation.php';

	if(isset($_POST['ajoutCompte'])){
		extract($_POST);
		$dateCreation = date("d-m-Y");
		$idCli = insererClient($cni, $nom, $prenom, $adresse,  $tel);
		$idGestCompte = $_SESSION['idUser'];
		$idCompte = ajoutCompte($numero, $dateCreation, $solde, $idCli, $idGestCompte);
		if ($idCompte > 0) {
			$idTypeOperation = getTypeOpByNom("depot")['id'];
			$numeroOp = genererNumeroOperation();
			if(depot($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte) > 0)
			{
				header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=nouveauCompte&ok=1');
			}else{
				header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=nouveauCompte&ok=0');
			}
		}
	}
	if (isset($_GET['num'])) {
		$compte = findCompteByNumero($_GET['num']);
		if($compte == null)
		{
			header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=operation&ok=0');
		}
		else
		{
			$operations = listOpByNomCompte($compte['id']);
			$_SESSION['compte'] = $compte;
			$_SESSION['operations'] = $operations;
			header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=operation&ok=1');
		}
	}
	if(isset($_GET['ajoutNC'])){
		extract($_POST);
		$dateCreation = date("d-m-Y");
		$idCli = $btnAjout;
		$idGestCompte = $_SESSION['idUser'];
		$idCompte = ajoutCompte($numero, $dateCreation, $solde, $idCli, $idGestCompte);
		if ($idCompte > 0) {
			$idTypeOperation = getTypeOpByNom("depot")['id'];
			$numeroOp = genererNumeroOperation();
			if(depot($numeroOp, $dateCreation, $solde, $idCompte, $idTypeOperation, $idGestCompte) > 0)
			{
				header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=client&ok=1');
			}else{
				header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=client&ok=0');
			}
		}
	}
	if (isset($_GET['changeEtat'])) {
		$idCompte = $_GET['changeEtat'];
		echo "idCompte";
		if(changeEtat($idCompte) > 0){
			header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=compte&ok=1');
		}else{
			header('location:/BanqueDuPeuple/src/view/indexCompte.php?ok=1');
			header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=compte&ok=0');
		}
	}
?>
