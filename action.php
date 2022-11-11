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
                
                    $sth = $dbco->prepare(" SELECT * FROM inscription WHERE  `e-mail`='$email'");
                /*    $sth->execute();
                  $res = $sth->fetch(PDO::FETCH_ASSOC); */
                 
                  $sth->execute(); 
                  $res = $sth->fetch(PDO::FETCH_ASSOC)/* [0] */; 
                    if(count($res) > 0 && password_verify($mdp,$res['mdp']) && $res["roles"] == 'Admistrateur')

                  {  /* permet de ne pas voir le nom de celui qui connect sur la liste  */
                          /*photo  */
                        session_start(); 
                        $_SESSION['identifiant']=$res['id'];
                         $_SESSION['photo']=$res['photo']; 
                        header('Location: page_admistrateur.php');
                        
           
                  }
                   else if(count($res) > 0 && password_verify($mdp,$res['mdp']) && $res["roles"] == 'Utilisateur')
                  {
                        /* permet de ne pas voir le nom de celui qui connect sur la liste  */
                        session_start();
                        header('Location: page_admistrateur2.php');
                        $_SESSION['identifiant']=$res['id'];      
                  }
                  else{
                        $message1.="<label>Vous n'êtes pas dans la base de données, inscrivez-vous</label>";
                  }
            
            }
      

      }


?>