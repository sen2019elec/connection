
<?php
// ouverture de la connexion

include "fichier_connection.php";
session_start();
if(isset($_GET['updateid'])){
   
    $id =$_GET['updateid'];
    $sth = $dbco->prepare("SELECT * FROM inscription where id=$id");

    $sth->execute();
    if ($sth->rowCount() > 0) {
        $check=$sth->fetchAll()[0];
    }
     
if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'])){
/*   var_dump(isset($_POST['nom'],$_POST['prenom'],$_POST['email']));
  exit;  */


	$nom=$_POST['nom'];	
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];			
  
     $id=$_GET['updateid'];	
    $date_modif=date('y-m-d h:i:s');
  
    $sthModifPersonne=$dbco->prepare("UPDATE inscription SET nom='$nom',prenom='$prenom',email='$email' WHERE id=$id");

    $sthModifPersonne->execute();
    if($sthModifPersonne){
        header('Location:page_admistrateur.php');
    
    }else { die('Erreur : '.$e->getMessage());}
   
}

}


?>
  