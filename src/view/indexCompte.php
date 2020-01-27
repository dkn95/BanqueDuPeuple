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
    foreach ($comptesAvecCllients as $key => $value) {
        if ($value['etat'] == '1') {
            echo '<tr>';
        }else{
            echo'<tr style="background-color: #ee5253">';
        }
        echo '<td>'.$value["numero"].'</td>
                <td>'.$value["dateCreation"].'</td>
                <td>'.$value["solde"] .'</td>
                <td>'.$value["nom"].' '.$value["prenom"].'</td>';
                if($value['etat'] == '1'){
                    echo'<td><a href="/BanqueDuPeuple/src//controller/compteController.php?changeEtat='.$value["id"].'">BLOQUER</a> <a href="/BanqueDuPeuple/src/controller/compteController.php?num='.$value["numero"].'">ALL OPERATEUR</a> <a style="color: silver; text-decoration: line-through;">ACTIVER</a> </td></tr>';
                }else{
                    echo' <td><a style="color: silver; text-decoration: line-through;">BLOQUER</a> <a href="/BanqueDuPeuple/src/controller/compteController.php?num='.$value["numero"].'">ALL OPERATEUR</a> <a href="/BanqueDuPeuple/src/controller/compteController.php?changeEtat='.$value["id"].'">ACTIVER</a> </td></tr>';
                }
    }
    ?>
</table>