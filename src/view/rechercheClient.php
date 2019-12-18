<?php $cniClient = ""; ?>
<div class="aligner">
	<input type="text" name="cniClient" class="champsNewC" style="width: 300px" id="cniClient" placeholder="CNI Client" value="<?= $cniClient?>" onblur="rechercheClient()">
</div>
<?php
	if (isset($_GET['cni'])) {
	 	$client = getClientByCni($_GET['cni']);
	 	if ($client != null) {
	 		?>
	 			<br>
	 		<fieldset class="dkn">
			        <legend class="newopL" align="center">INFOS CLIENT</legend>
			 <table class="tabClient">
			 	<tr>
			 		<td><span>Nom:</span> <?= $client['nom'] ?></td>
			 		<td><span>Prenom:</span> <?= $client['prenom'] ?></td>
			 	</tr>
			 	<tr>
			 		<td><span>Adresse:</span> <?= $client['adresse'] ?></td>
			 		<td><span>Téléphone:</span> <?= $client['tel'] ?></td>
			 	</tr>
			 </table>
			 </fieldset>
			 <br>
<table id="listCompte" class="tableauPlein1" cellspacing="0">
    <tr>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th>GESTIONNAIRE</th>     
    </tr>
    <?php
    $comptes = getCompteByIdClient($client['id']);
    foreach ($comptes as $key => $value) {
        if ($value['etat'] == '1') {
            echo '<tr>';
        }else{
            echo'<tr style="background-color: red">';
        }
        echo '<td>'.$value["numero"].'</td>
                <td>'.$value["dateCreation"].'</td>
                <td>'.$value["solde"] .'</td>
                <td>'.$value["nom"].' '.$value["prenom"].'</td>';
    }
    ?>
</table>
<br>	
	 		<?php
	 	}else{
	 		echo "Client non trouvé !!!";
	 	}
	 }
?>