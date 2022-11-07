<?php 

include "fichier_connection.php"; 
$id=$_GET['id'];

$sql=$dbco->prepare("UPDATE inscription SET etat=0 WHERE id=:id");
        $sql->execute(['id'=>$id]);
        // var_dump($_POST);die;
        header("location:page_admistrateur.php");

/* if (isset($_GET['id'])) {
    /*  $elev= SELECT * FORM User */
    /* $req=$connect->query("UPDATE inscription SET etat='0' WHERE id='$id'"); */
    
    /* header('location:page_admistrateur.php');
}  */    
?>