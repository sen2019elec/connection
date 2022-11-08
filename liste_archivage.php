<?php session_start();?><!--  activation des sections pour savoir ce lui qui connecte  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .body {
    border: 2px;
  }

  .contenaire {
    height: 10%;
    width: 80%;
    border: 5px;
   
  }

  .col {
    width: 25%;
  }

  .row.input {

    width: 25%;
  }
    .logo {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 10%;
  }

  .menu {
    margin-left: 1300px;
  }
  .ach p{
    margin-left: 60%;
  }
</style>
<body>
<?php 
    /* connection bdd et recherche  */ 
    include "fichier_connection.php";
    $articles;

      $articles=$dbco->query('SELECT nom FROM inscription ORDER BY id DESC');
    ?>
       <?php 
   
 
   /*  affichage information  de ce lui qui connect  */
      
          $id = $_SESSION['identifiant']; 
         $sql2 = "SELECT * FROM inscription WHERE id = $id";
         $stmt = $dbco->prepare($sql2);
         $stmt->execute();
         $affich = $stmt ->fetch(PDO::FETCH_ASSOC);
         $prenom = $affich['prenom'];
         $nom = $affich['nom'];
         $matricule = $affich['matricule'];
       ?>
      <!-- menu -->

  <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;">
    <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
    <div class="menu">
      <nav class="navbar navbar-expand-lg bg-light" style="margin-left: -50px;">
        <!-- <div class="contenaire" style="width: 100px; border:solid 1px; margin-left:-30px;height: 100px;margin-top:1px;">
        <img src="photos/photo1.jpg" alt="" style="width: 100px;height: 100px;"><br><p>  M.FALL:001</p>
        </div> -->
        <div class="contenaire" style="margin-left:-2% ;">
        <?php echo $prenom." ".$nom;?><br>
        <?php echo $matricule;?>
        </div>
        <div class="container-fluid">

          <button class="btn btn-outline-success" type="submit"><a href="page_connection.php"> Déconnection</a></button>
        </div>
      </nav>
    </div>
  </div>

  <!-- fin menu -->
  <div>
    <img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" style="height:120px;margin: 26%;width:48%;margin-top:7%;">
  </div>

  <!--  <div class="contenaire" style="height: 60%;border:solid 2px;padding:10%;margin-top:0%;"> -->
  <main method="post" action=""  style="height: 50px;display: flex;justify-content:center;margin-top:-795px;">
    <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
      <div class="contenaire" style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
        <div class="contenaire" style="margin-left :70px;display:flex; margin-top:150px;">
          <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:3px;height: 30px;">
            <p class="text-center" style="margin-bottom :40px;font-weight:bold;
            color:#f8f9fa;">LISTE DES ARCHIVES </p>
          </div> 
            <!--  -->
             <div class="ach"><a  href="page_admistrateur.php"><p>retour</p></a></div>
          <div>
          <form method="get" action="">
      <div style=" padding-left:70%;display:flex;justify-content:center;align-items:center;">
      <input class="form_control" type="search" placeholder="rechercher"style="height: 30px;" name="search">
      <button class="btn-successe" type="submit"style="height: 30px;background-color:
green;color:#f8f9fa;">recherche</button> 
      </div>
      
    </form></div>
      <!--  -->
    </div>
    <div class="container">
   
      <table class="table table-bordered">
        <thead style="background-color:blue ; color:#f8f9fa;">
        <?php 
        
        
 
                     echo '<th class="thliste">NOM</th>';
                     echo '<th class="thliste">PRENOM</th>';
                     echo '<th class="thliste">EMAIL</th>';
                     echo '<th class="thliste">MATRICULE</th>';
                     echo '<th class="thliste">ROLE</th>';
                     echo '<th class="thliste">ACTION</th>';
                    echo '</tr>';

            ?>  
       </thead>
       <tbody>
        <?php 
                  include "fichier_connection.php"; 
                 /* include "archive.php"; */

                $sql = "SELECT * FROM inscription WHERE etat=0 AND id != $id";
                /* var_dump($reponse);
                exit; */
          
                $reponse = $dbco->query($sql);
                /* traitement recherche */
    
                if((isset($_GET['search'])) && !empty($_GET['search'])){ /* permet d'effecter la recherche  */
                  $search= $_GET['search'];
                  $reponse=$dbco->query ("SELECT * FROM inscription WHERE etat=0 AND prenom LIKE '%$search%'");
        
                  
              }
                 while($donnees = $reponse->fetch()) // Renvoit les valeurs de la bdd
                 { /* recupération id */
                  $id=$donnees['id']; 
                  $etat=$donnees['etat'];
                   /* recupération des input */
                   echo '<tr>';
                   
                   echo '<td class="tdliste">' . $donnees['nom'] . '</td>';
                   echo '<td class="tdliste">' . $donnees['prenom'] . '</td>';
                   echo '<td class="tdliste">' . $donnees['e-mail'] . '</td>';
                   echo '<td class="tdliste">' . $donnees['matricule'] . '</td>';
                   echo '<td class="tdliste">' . $donnees['roles'] . '</td>'; 
                   echo '<td class="tdliste">
                    <a onclick="return confirm(\'voulez vous vraiment désarchiver?\')" href="traitement_desarchive.php?desarchivid='.$id.'"><i class="fa-solid fa-download"></i> </a>
                   </td>';
                    echo '</tr>';
                   
                 }

                 /* if (isset($_GET["archive"])) {
                  $id=$_GET["archive"];
                 /*  var_dump(($_GET["id"]));
                  die; */
                 /*  $elev= SELECT * FORM User */
     /*  $req=$dbco->query("UPDATE insription SET etat='0' WHERE id='$id'");
     */
          /* header('location:page_admistrateur.php'); */
             
     /*    } */ 
                /*   echo '</table>
                </div></center>';
                  $pdo = null; */
                  ?>
             </tbody>
       

        </table>
          </main>
        </body>
</html> 