<?php 
    require_once '../model/modelCompte.php';
    $comptesAvecCllients = getAllCompteAvecClients();
 ?>
<br>
<br>
<div align="right">
    <a href="/BanqueDuPeuple/src/view/indexBanque.php?view=nouveauCompte"><button class="aligner">Nouveau Compte</button></a>
</div><br>
<table id="listCompte" class="tableauPlein1" cellspacing="0">
    <tr>
        <th>NUMERO</th>
        <th>DATE CREATION</th>
        <th>SOLDE</th>
        <th>NOM CLIENT</th>
        <th>ACTIONS</th> 
    </tr>
    <?php
    foreach ($comptesAvecCllients as $key => $value) {?>
            <tr>
                <td><?= $value["numero"]?></td>
                <td><?= $value["dateCreation"]?></td>
                <td><?= $value["solde"]?></td>
                <td><?= $value["nom"]?> <?=$value["prenom"]?></td>
                <td><a>Supprimer</a></td>
            </tr>
    <?php      
    }
    ?>
</table>