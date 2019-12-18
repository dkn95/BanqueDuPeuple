<fieldset id="formulaire">
    <form align="center" method="POST" action="/BanqueDuPeuple/src/controller/userController.php">

        <div>
            <h1 class="title">Ajouter un utilisateur</h1>
        </div>
        <div >
            <label for="re-pass"></label>
            <input class="form-group" type="text" placeholder="NOM" name="nom" id="nom" />
        </div>
        <div >
            <label for="re-pass"></label>
            <input class="form-group" type="text" placeholder="PRENOM" name="prenom" id="prenom" required/>
        </div>
        <div >
            <label for="re-pass"></label>
            <input class="form-group" type="text" placeholder="LOGIN" name="login" id="login" required/>
        </div>
        <div >
            <label for="re-pass"></label>
            <input class="form-group" type="password" placeholder="MOT DE PASSE" name="mdp" id="mdp" required/>
        </div>
        <div >
            <label for="re-pass"></label>
            <select class="form-group1" class="new" name="profil" placeholder="PROFIL">
                <option selected> </option>
                <option value="admin">admin</option>
            </select>
        </div>
        <div>
            <input type="submit" name="ajoutUser" id="signup" class="form-submit" value="Valider"/>
        </div>
    </form>
    <br><br>
</fieldset>
<?php 
    if (isset($_GET['ok'])){
        if ($_GET['ok'] == '1') {
        ?>
            <script src="/BanqueDuPeuple/public/js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                alert("L'Utilisateur a été ajouter avec succès !!");
            })
            </script>
        <?php
        }else{
        ?>
            <script src="/BanqueDuPeuple/public/js/jquery.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                alert("Echec de l'ajout de l'Utilisateur !!");
            })
            </script>
    <?php
        }
    }
?>