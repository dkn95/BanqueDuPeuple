<?php 
	$clients = getAllClients();
 ?>
 <table class="tableauPlein1" cellspacing="0">
    <tr>
        <th>CNI</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>ADRESSE</th>
        <th>TELEPHONE</th>
        <th id="A">ACTIONS</th>     
    </tr>
    <?php
    	foreach ($clients as $key => $client) {?>
    	 	<tr>
    			<td><?= $client['cni']?></td>
    			<td><?= $client['nom']?></td>
    			<td><?= $client['prenom']?></td>
    			<td><?= $client['adresse']?></td>
    			<td><?= $client['tel']?></td>
    			<td><a name="nouveauCompteBtn" id="<?= $client['id']?>"><button class="form-ajout">Ajouter Compte</button></a></td>
    		</tr>
    <?php  
    	 } ?>
</table>
<?php $numero = genererNumero(); ?>
<br>
	<fieldset id="nouveauCompteF" hidden="hidden" class="form-solde" >
		<form method="POST" action="/BanqueDuPeuple/src/controller/compteController.php?ajoutNC=1" align="center">
		<div><h1 class="title">Info Comptes</h1></div>
		<div>
			<label></label>
			<input class="form-group" type="text" name="numero" id="numero" value="<?= $numero ?>" readonly/>
		</div>
		<div>
			<label></label>
			<input class="form-group" type="number" name="solde" id="solde" min="500" placeholder="Solde" required> 
		</div>
		<div>
			<button type="submit" class="form-submit" id="btnAjoutCompte" name="btnAjout">Ajouter</button>
		</div>
		</form>
    </fieldset>
<br>
<br>
<?php 
	if (isset($_GET['ok'])){
		if ($_GET['ok'] == '1') {
		?>
			<script src="/BanqueDuPeuple/public/js/jquery.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				alert("Le Compte a été créer avec succès !!");
			})
			</script>
		<?php
		}else{
		?>
			<script src="/BanqueDuPeuple/public/js/jquery.js"></script>
			<script type="text/javascript">
			$(document).ready(function(){
				alert("Echec de la creation du compte !!");
			})
			</script>
	<?php
		}
	}
?>
