<?php
                include("fichier_connection.php"); 

                session_start();
                $list = "SELECT * FROM inscription";
                $result = $dbco->query($list);
                while($data = $result->fetch()){
                $id = $data["id"];
                $nom = $data["nom"];
                $prenom = $data["prenom"];
                $email = $data["email"];
                $roles = $data["roles"];
                $matricule = $data["matricule"];
                $etat = $data["etat"];
                  /* debut 1 */
       $photo=file_get_contents($_FILES['photo']['tmp_name']);
       /* fin 1 */ 
        
                  /* 
            if($etat==1){

          
                echo "<tr><td>$nom</td><td>$prenom</td><td>$email</td><td>$roles</td><td>$matricule</td>";
                echo "<td style='display:flex; justify-content:center;'>";
                echo "<a href='page_admistrateur.php?id=$id''><i class='fa-solid fa-box-archive'></i></a>";
                echo "</td";
                echo "</tr>";
                }
            }
 */



          
      
            /* archivage */
          /*   if(isset($_GET["id"])){
                $id = $_GET["id"];
                if(!empty($id) && is_numeric($id)){
                     include("fichier_connection.php"); 
                        $list = "UPDATE inscription SET etat = '0' where id=$id";
                        $result = $dbco->query($list);
                         header("Location:page_admistrateur.php"); 
                       
                }*/
            } 
          
      