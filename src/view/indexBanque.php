<?php
    session_start();
    require_once '../model/modelCompte.php';
    require_once '../model/modelClient.php';

    if ($_SESSION == null)
    {
        header("location:/BanqueDuPeuple/index.php");
    }
    else
    {
        include '../../topbar.php';
        echo '<div class="container">';
        echo '<br><br>';
       //echo "BONJOUR ".$_SESSION['nomComplet'];
        if (isset($_GET['view']))
        {
            switch ($_GET['view'])
            {
                case 'compte':
                    include 'indexCompte.php';
                    break;
                case 'rechClient':
                    include 'rechercheClient.php';
                    break;
                case 'client':
                    include 'indexClient.php';
                    break;
                case 'operation':
                    include 'indexOperation.php';
                    break;
                case 'nouveauCompte':
                    $numero = genererNumero();
                    if(isset($_GET['ok'])){
                        if ($_GET['ok']==1) {
                            echo "Compte créee avec succés !!!";
                        }else {
                            echo "Erreur !!!";
                        }
                    }
                    include_once 'nouveauCompte.php';
                    break;
                case 'utilisateur':
                    include 'indexUtilisateur.php';
                    break;
                default:
                    include_once 'erreur.php';
                    break;
            }
        }
        else
        {
            include_once '../../accueil.php';
        }
        echo '</div>';
        include '../../footer.php';

    }
    //var_dump($_SESSION);
?>
<script src="/BanqueDuPeuple/public/js/dom.js"></script>