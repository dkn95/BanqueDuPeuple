<?php
    require_once 'bd.php';

    function verifierConnexion($login, $mdp)
    {
        $sql = "SELECT * FROM utilisateur WHERE login='$login' AND password = '$mdp'";
        global $bd;
        return $bd -> query($sql) -> fetch();
    }
    function insererUser($nom, $prenom, $login, $mdp, $profil)
    {
    	$id = lastInsertIdForTable('utilisateur');
    	$sql = "INSERT INTO utilisateur VALUES('$id', '$nom', '$prenom', '$login', '$mdp', '$profil')";
    	global $bd;
    	return $bd -> exec($sql);
    }
?>