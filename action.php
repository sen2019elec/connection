<?php
 require "fichier_connection.php";
      /* recuppération des saisis */
      if(isset($_POST['submit']))
      {
            if(isset($_POST['mdp']) && isset($_POST['email']))
            {
                    $mdp= $_POST['mdp'];
                    $email= $_POST['email'];
     
                    /* insertion */
                     include("fichier_connection.php");
                    $sth = $dbco->prepare(" SELECT * FROM inscription WHERE  `e-mail`='".$email."'");
                /*    $sth->execute();
                  $res = $sth->fetch(PDO::FETCH_ASSOC); */
                  
                  $sth->execute(); 
                  $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
                  var_dump($res);
                    if(count($res) > 0 && password_verify($mdp,$res['mdp']) && $res["roles"] == 'Admistrateur')
                  {     header('Location: page_admistrateur.php');
                      
           
                  }
                   else if(count($res) > 0 && password_verify($mdp,$res['mdp']) && $res["roles"] == 'Utilisateur')
                  {
                        header('Location: page_admistrateur2.php');
                             
                  }
                  else{
                        $message1.="<label>Vous n'êtes pas dans la base de données, inscrivez-vous</label>";
                  }
            
            }
      

      }


?>