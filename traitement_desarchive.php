<?php 
include "fichier_connection.php"; 
if(isset($_GET['desarchivid']))
$id=$_GET['desarchivid'];

$sql=$dbco->prepare("UPDATE inscription SET etat=1 WHERE id=:id");
        $sql->execute(['id'=>$id]);
        // var_dump($_POST);die;
        header("location:liste_archivage.php");
?>