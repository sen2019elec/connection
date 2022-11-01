<?php
 require "fichier_connection.php";

      /* recuppération des saisis */
    if (isset($_POST['submit'])){
      $nom= $_POST['nom'];
      $prenom= $_POST['prenom'];    
      $email= $_POST['email'];
      $role= $_POST['role'];
      /* password_hash,password_defaut criptage de mdp */
      $mdp= password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
      $photo= $_POST['photo']; 
      /* insertion */

            $sth = $dbco->prepare("SELECT * FROM inscription WHERE `e-mail` = '$email'"); 
            $sth->execute();
            $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
            if(count($res) == 0){ 
            $sth = $dbco->prepare("INSERT INTO inscription(nom,prenom,`e-mail`,roles,mdp,photo)
            VALUES (?, ?, ?, ?, ?, ?)"); 

            $sth->bindValue(1, $nom);
            $sth->bindValue(2, $prenom);
            $sth->bindValue(3, $email);
            $sth->bindValue(4, $role);
            $sth->bindValue(5, $mdp);
            $sth->bindValue(6, $photo ); 
            $sth->execute();
             //$sth->execute(array( /* ':prenom' =>  */$nom, /* ':nom' =>  */$prenom,/* ':date_naissance' =>  */$date, /* ':adresse' =>  */$adresse, /* ':sexe' =>  */$sexe, /* ':nat' => */ $nationalite, /* ':mail' =>  */$email, /* ':nt' =>  */$nom_tuteur, /* ':nut' =>  */$numero_tuteur)); */
               $message2.="<label>Enregistrement valide</label>";
              $sql = "SELECT id FROM inscription WHERE `e-mail` = '$email'";
                $id = $dbco->prepare($sql);
                $id->execute();
                $row = $id->fetch(PDO::FETCH_ASSOC);
                //on modifie le matricule
                $matricule = date('Y-', time()).$row['id'].'-ELV';
                //on modifie la derniere matricule du BD
                $sql2 = "UPDATE inscription  SET  matricule = '$matricule' WHERE `e-mail` = '$email'";
                $matricule2 = $dbco->prepare($sql2);
                $matricule2->execute();
                $message3.="<label>Votre matricule est: '".$matricule."'</label>";
                header("location: page_inscription.php");
                /* echo "inscription reussi";  */
              
        }
         else{  echo "essec";
          $message2.="<label>Enregistrement invalide</label>";
          $message4.="<label>Cet email exite déja</label>"; 
        }   
    } 
      ?>