<?php
    require_once 'bd.php';
    function insererClient($cni, $nom, $prenom, $adresse,  $tel)
    {
        $lastId = lastInsertIdForTable("client");

        $insert = "INSERT INTO client(id,cni,nom,prenom,adresse,tel) VALUES ($lastId,\"$cni\",\"$nom\",\"$prenom\",\"$adresse\",\"$tel\")";
        global $bd;
        $bd -> exec($insert);
        return $bd -> lastInsertId();
    }
    function ajoutCompte($numero, $dateCreation, $solde, $idClient, $idGestCompte)
    {
        $lastId = lastInsertIdForTable("compte");
        $insert = "INSERT INTO compte VALUES ('$lastId','$numero','$dateCreation',0,$idClient,$idGestCompte, 1)";
        global $bd;
        $bd -> exec($insert);
        return $bd -> lastInsertId();
    }
    function genererNumero(){
        $sql = "SELECT max(id) FROM compte";
        global $bd;
        $array =  $bd -> query($sql) -> fetch();
        if($array == NULL){
            $id = 1;
        }else{
            $array[0]++;
            $id = $array[0];
        }
        $numero = "BDP_".date('d').date('m').date('Y')."_C".$id;
        return $numero;
    }
    function findCompteByNumero($numero){
        $sql = "SELECT * FROM compte WHERE numero='$numero'";
        global $bd;
        return $bd -> query($sql) -> fetch();
    }
    function getAllCompte(){
        $sql = "SELECT * FROM compte";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }
    function getAllCompteAvecClients(){
        $sql = "SELECT Co.*,Cl.nom,Cl.prenom FROM compte Co,client Cl WHERE Co.idClient = Cl.id ORDER BY Co.idClient";
        global $bd;
        return $bd -> query($sql) -> fetchall();
    }
    function changeEtat($idCompte){
        $sql = "SELECT etat FROM compte where id='$idCompte'";
        global $bd;
        $etat = $bd -> query($sql) -> fetch();
        if($etat[0] == '1'){
            $sql = "UPDATE compte set etat = 0 WHERE id = '$idCompte'";
            return $bd -> exec($sql);
        }else{
            $sql = "UPDATE compte set etat = 1 WHERE id = '$idCompte'";
            return $bd -> exec($sql);
        }
    }
    function getNumCompteByIdOp($idOp)
    {
        $sql = "SELECT numero FROM compte WHERE id = (SELECT idCompte FROM operation WHERE id = '$idOp')";
        global $bd;
        return $bd -> query($sql) -> fetch();
    }
    function getCompteByIdClient($idCli)
    {
        $sql = "SELECT Cp.*,U.nom, U.prenom from compte Cp, client Cl, utilisateur U WHERE Cp.idClient = Cl.id AND Cp.idGestCompte = U.id AND Cl.id = '$idCli'";
        global $bd;
        return $bd -> query($sql) -> fetchall();

    }
?>