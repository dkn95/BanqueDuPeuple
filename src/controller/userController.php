<?php
    session_start();
    require_once '../model/modelUser.php';
    if (isset($_POST['connexion']))
    {
        extract($_POST);
        $user = verifierConnexion($login, $mdp);
        if($user != null)
        {
            $_SESSION['profil'] = $user['profil'];
            $_SESSION['nomComplet'] = $user['nom'].' '.$user['prenom'];
            $_SESSION['idUser'] = $user['id'];
            header('location:/BanqueDuPeuple/accueil.php');
        }
        else
        {
            header('location:/BanqueDuPeuple/index.php?connexion=0');
            return;
        }

    }
    if (isset($_GET['deconnexion']))
    {
        session_unset();
        $_SESSION = array();
        header('location:/BanqueDuPeuple/index.php');
    }
    if ($_POST['ajoutUser']) {
        extract($_POST);
        if (insererUser($nom, $prenom, $login, $mdp, $profil) > 0){
            header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=utilisateur&ok=1');
        }
        else
        {
            header('location:/BanqueDuPeuple/src/view/indexBanque.php?view=utilisateur&ok=0');
        }
    }
?>