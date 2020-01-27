 <?php 
	if (isset($_SESSION['compte']) && isset($_GET['ok']) && $_GET['ok'] == 1) {
			$numCompte = $_SESSION['compte']['numero'];
	}
	else
	{
		$numCompte = "";
	}
 ?>
<div class="search_op">
	<input type="text" name="numeroCompte" class="form-groupe1" style="width: 300px" id="numeroCompte" placeholder="NUMERO DE COMPTE" value="<?= $numCompte ?>" onblur="recherche()">
</div>
<?php
	if (isset($_GET['ok'])) {
		if($_GET['ok'] == 0)
		{?>
			<p class="cpt_search">Compte non Trouvee !!!</p>
		<?php
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
					<div>
						<h3 class="op_title">OPERATION</h3> 
					</div>
					<div align="center">
						<select class="form-group1" name="typeOperation">
							<option selected>depot</option>
							<option>retrait</option>
						</select>
					</div>
					<div align="center">
						<input class="form-group" type="number" name="montant" id="montant" placeholder="Montant" min="500" required>
					</div>
			    	<div align="center">
						<input class="form-submit" type="submit" name="ajoutOp" value="Valider">
					</div>
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
			 <fieldset class="field_info">
			 	<div>
					<h3 class="op_title">Infos Client</h3>
				</div>
				 <div style="float:left; margin-left:2%">
					<div>
						<p class="name_field"><span>Nom:</span> <?= $client['nom'] ?></p>
					</div>
					<div>
						<p class="name_field"><span>Prenom:</span> <?= $client['prenom'] ?></p>
					</div>
				 </div>
				 <div style="float:right;">
					<div>
						<p class="name_field"><span>Adresse:</span> <?= $client['adresse'] ?></p>
					</div>
					<div>
						<p class="name_field"><span>Téléphone:</span> <?= $client['tel'] ?></p>
					</div>	
				 </div>
				 
				 
			 </fieldset>
			 <br>
			 <fieldset class="field_info1">
				<div>
					<h3 class="op_title">Infos Compte</h3>	
				</div>
				<div align="center">
					<p class="name_field"><span>Solde:</span> <?= $compte['solde'] ?></p>
				</div>
			 
			 </fieldset>
			 
			 <fieldset style="margin-top:15px">
			        <legend class="op_title1" align="center">LISTE DES OPERATIONS</legend>
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