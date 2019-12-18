<?php  
    
?>
<fieldset class="form-solde">
    <form align="center" method="POST" action="/BanqueDuPeuple/src/controller/compteController.php" id="nouveauCompte">

        <div>
            <h1 class="title">INFOS CLIENT</h1>
        </div>
        <div >
            <label></label>
            <input type="text" placeholder="NUMERO CNI" name="cni" id="cni" class="form-group" />
        </div>
        <div >
            <label></label>
            <input type="text" placeholder="NOM" name="nom" id="nom" class="form-group" />
        </div>
        <div >
            <label></label>
            <input type="text" placeholder="PRENOM" name="prenom" id="prenom" class="form-group" />
        </div>
        <div >
            <label></label>
            <input type="text" placeholder="ADRESSE" name="adresse" id="adresse" class="form-group" />
        </div>
        <div >
            <label></label>
            <input type="text" placeholder="TELEPHONE" name="tel" id="tel" class="form-group" />
        </div>
        <div>
            <h1 class="title1">INFOS COMPTES</h1>
        </div>
        <div >
            <label></label>
            <input class="form-group" type="text" name="numero" id="numero" value="<?= $numero ?>" readonly/>
        </div>
        <div >
            <label></label>
            <input class="form-group" type="number" name="solde" id="solde" min="500" placeholder="SOLDE">
        </div>
        <div >
            <label></label>
        </div>
        
        <div>
            <input type="submit" name="ajoutCompte" id="signup" class="form-submit" value="Valider"/>
        </div>
    </form>
    <br><br>
</fieldset>