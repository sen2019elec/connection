<?php
require_once('fichier_connection.php');

if(isset($_GET['rolid'])){
    $id=$_GET['rolid'];


    $req = $dbco->prepare("SELECT * FROM inscription WHERE id = $id");
    $req->execute();

    if ($req->rowCount()>0) {
        $data = $req->fetchAll()[0];
        if ($data['roles'] === 'Admistrateur') {
            $req = $dbco-> prepare("UPDATE inscription SET roles_etat = 1, roles = 'Utilisateur' WHERE id = $id");
            $req->execute();
        }else{
            $req = $dbco-> prepare("UPDATE inscription SET roles_etat = 0, roles = 'Admistrateur' WHERE id = $id");
            $req->execute();
        }
    }
    if ($req) {
        header("Location:page_admistrateur.php"); 
    }
}






?>