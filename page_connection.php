<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

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

<body>
        <!-- menu -->
    <?php
    /* link de connection */
    include("fichier_connection.php");  
      ?>
    <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;" >
         <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
           <div class="menu">
           <nav class="navbar navbar-expand-lg bg-light">
              
           </nav>
        </div>
    </div> 
     <!-- fin menu --> 
     <div>
    <img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" style="height:120px;margin: 26%;width:48%;margin-top:7%;">
  </div>

  <!--  <div class="contenaire" style="height: 60%;border:solid 2px;padding:10%;margin-top:0%;"> -->
  <form  onsubmit="validateForm(this)"  style="height: 50px;display: flex;justify-content:center;margin-top:-795px;">
    <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
      <div class="contenaire" style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
        <div class="contenaire" style="margin-left :150px;">
          <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:10%;">
            <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;color:#f8f9fa;">PAGE DE CONNECTION </h1>
          </div>
          <div class="row mb-3" style="margin-left:50px;">

            <div class="col">
              <label for="mot_de_passe">MOT DE PASSE</label>
              <input type="text" class="form-control" placeholder="mot_de_passe" id="mot_de_passe" required style="width: 68%;">
              <div class="invalid-feedback">
                Veuillez entrer un bon mot de passe </div>
            </div>
            

          </div>
          <div class="row mb-3">
          <button type="submit" class="btn btn-primary" style="background-color:blue;margin-left:10%;margin-top:50px;width:60%; ">CONNECTER</button>
          </div>


          <button type="submit" class="btn btn-primary" style="background-color:blue;margin-left:52%;margin-top:30px; "><a href="page_inscription.php"> INSCRIPTION</a></button>
         
        </div>
      </div>
    </div>
  </form>
</div>

             <div class="form-outline form-white mb-4"style="border-radius:2px;" >
                <label class="form-label" for="typePasswordX"style="margin-left: -500px;">Password</label>
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
               
              </div> 
               <div class="form-outline form-white mb-4"style="margint-top:80%;">
                  <button type="button" class="btn btn-primary" 
                  style="background-color:blue;margin-left:0%;width: 550px; height: 50px;">CONNECTION</button>
              </div>  
            </div>
            </div>
            </div>
            </div>
            </div>
            </div></div>   
             -->          <!--  -->
     
        
        <style>
.body {
    border: 2px;
  }

             if (checkEmail(email)) {
                 alert('Adresse e-mail valide');
             } else {
                 alert('Adresse e-mail non valide');
             }

  .col {
    width: 25%;
  }

          <!--  --> 
          <?php 
           /* recuppération des saisis */
      $email= $_POST['e-mail'];
      $prenom= $_POST['mot_de_passe'];
/* insertion */

$sql = "INSERT INTO `visiteurs` ( `nom`, `prenom`, `age`, `paye`, `sexe`, `dateInscrit`)
VALUES( 'Griffin', 'Peter', 35, 'France', 'Homme', '2003-01-12'),
( 'Glenn', 'Roberta', 19, 'Brésil', 'femme', '2003-02-12')
";

if ($conn->query($sql) === TRUE) {
  echo "les nouveaux enregistrements ajoutés avec succés";
} else {
  echo "Erreur: " . $sql . "
" . $conn->error;
}


 
</body>
</html>