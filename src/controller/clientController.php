<?php
	if (isset($_GET['cni'])) {
	 	$client = getClientByCni($_GET['cni']);
	 	if ($client == null){
	 		header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=rechClient&trouve=0');
	 	}else{
	 		$_SESSION['client'] = $client;
	 		header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=rechClient&trouve=1');
	 	}
	 } 
?>