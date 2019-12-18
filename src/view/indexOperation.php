 <?php 
	if (isset($_SESSION['compte']) && isset($_GET['ok']) && $_GET['ok'] == 1) {
			$numCompte = $_SESSION['compte']['numero'];
	}
	else
	{
		$numCompte = "";
	}
 ?>
<div class="aligner">
	<input type="text" name="numeroCompte" class="champsNewC" style="width: 300px" id="numeroCompte" placeholder="NUMERO DE COMPTE" value="<?= $numCompte ?>" onblur="recherche()">
</div>
<?php
	if (isset($_GET['ok'])) {
		if($_GET['ok'] == 0)
		{
			echo "COMPTE NON TROUVEE!!!!";
			$_SESSION['compte'] = null;
			$_SESSION['operations'] = null;
		}

		if($_GET['ok'] == 1)
		{
			if (isset($_SESSION['compte']) AND isset($_SESSION['operations'])) 
			{
			$compte = $_SESSION['compte'];
			$operations = $_SESSION['operations'];
			$client = getClientByIdCompte($compte['id']);
			if ($compte['etat'] == '1') {
				
			?>
			<form method="POST" action="/BanqueDuPeuple/src/controller/opController.php?idCompte=<?= $compte['id'] ?>">
				<fieldset class="newOp">
			        <legend class="newopL" align="center">OPERATION</legend>
			        <table class="tab_complet">
			            <tr>
			                <td class="formul_tab">
		                    	<select class="champsNewC" style="width: 200px;" name="typeOperation">
		                    		<option selected>depot</option>
		                    		<option>retrait</option>
		                    	</select>
		                    </td>
			            </tr>
			            <tr>
			                <td class="formul_tab"><input class="champsNewC" type="number" name="montant" id="montant" placeholder="Montant" min="500" required></td>
			            </tr>
			        </table>
			    <br>
			    <div class="aligner"><input class="btn" type="submit" name="ajoutOp" value="Valider"></div>
			    </fieldset>
			</form>
			<br>
			<?php 
				if (isset($_GET['op'])) {
					if($_GET['op'] == 1)
					{
						echo '<div class="aligner"><span class="reussi">OPERATION REUSSIE</span></div>';
					}
					if($_GET['op'] == 0)
					{
						echo '<div class="aligner"><span class="echec">ECHEC DE L\'OPERATION</span></div>';
					}
				}
			}
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
			 <fieldset class="dkn">
			        <legend class="newopL" align="center">INFOS COMPTE</legend>
			 <table class="tabClient">
			 	<tr>
			 		<td><span>Solde:</span></td>
			 		<td><?= $compte['solde'] ?></td>
			 	</tr>
			 </table>
			 </fieldset>
			 <br>
			 <fieldset class="dkn1">
			        <legend class="newopLS" align="center">LISTE DES OPERATIONS</legend>
			<table class="tableauPlein1" style="height: auto;">
				<tr>
					<th>NUMERO OP</th>
					<th>DATE DE L'OPERATION</th>
					<th>MONTANT</th>
					<th>TYPE</th>
					<th>N° COMPTE</th>
					<th>NOM ET PRENOM GEST</th>
					<th>ACTION</th>

				</tr>
				<?php foreach ($operations as $key => $value) {
					if ($value['etatOp'] == '1'){
				?>
				<tr>
					<td><?= $value['numero'] ?></td>
					<td><?= $value['dateOperation'] ?></td>
					<td><?= $value['montant'] ?></td>
					<td><?= $value['type'] ?></td>
					<td><?= $compte['numero'] ?></td>
					<td><?= $value['nom'] ?>  <?= $value['prenom'] ?></td>
					<?php
						if($compte['etat'] == '1'){
					?>
						<td><a href="/BanqueDuPeuple/src/controller/opController.php?delete=<?= $value['idO']?>">Supprimer</a></td>
					<?php
						}else{
					?>
						<td><a>Supprimer</a></td>
					<?php
					}	
					?>
				</tr>
				<?php 
				}
				} ?>
			</table>
			</fieldset>
				<?php
			}
		}
	}
	if (isset($_GET['del'])) {
		?>
		<script src="/BanqueDuPeuple/public/js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				alert("Impossible de supprimer cette opération");
			})
		</script>
		<?php
	}
?>