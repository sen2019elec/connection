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
</head>

<body>

  <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;">
    <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
    <div class="menu">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

          <button class="btn btn-outline-success" type="submit"><a href="page_connection.php"> Connection</a></button>
        </div>
      </nav>
    </div>
  </div>

  <!-- fin menu -->

  <div>
    <img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" style="height:120px;margin: 26%;width:48%;margin-top:7%;">
  </div>

  <!--  <div class="contenaire" style="height: 60%;border:solid 2px;padding:10%;margin-top:0%;"> -->
  <form style="height: 50px;display: flex;justify-content:center;margin-top:-795px;">
    <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
      <div class="contenaire" style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
        <div class="contenaire" style="margin-left :150px;">
          <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:10%;">
            <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;color:#f8f9fa;">PAGE INSCRIPTION </h1>
          </div>
          <div class="row mb-3">

            <div class="col">
              <label for="nom">NOM</label>
              <input type="text" class="form-control" placeholder="Nom" id="nom" required style="width: 60%;">
            
             
              <div class="invalid-feedback">
                Veuillez entrer un nom </div>
            </div>
            <div class="col">
              <label for="prenom">PÉNOM</label>
              <input type="text" class="form-control" placeholder="Prénom" id="prenom" required style="width: 60%;">
              <div class="invalid-feedback">
                Veuillez entrer un prénom
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="e-mail">EMAIL</label>
              <input type="text" class="form-control" placeholder="email"required style="width: 60%;">
              <div class="invalid-feedback">
                Veuillez entrer un e-mail
              </div>
            </div>
            <div class="col">
            <label class="mr-sm-2" for="inlineFormCustomSelect" style="margin-left: 6px;">ROLE</label><br>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" style="width: 58%;margin-left:7px;">
        <option value="1">Admistrayeur</option>
        <option value="2">Utilisateur</option>
       
      </select>
              
              <div class="invalid-feedback">
                donner votre role
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="mot de passe" style="margin-top: 15px;">MOT DE PASSE</label>
              <input type="text" class="form-control" placeholder="mot de passe"required style="width: 60%;">
            </div>
            <div class="col">
              <label for="mot de passe"style="margin-top: 15px;">VALIDER MOT DE PASSE</label>
              <input type="text" class="form-control" placeholder="mot de passe"required style="width: 60%;">
            </div>
          </div>

          <div class="form-row">
            <div class="col">
              <!--  <input type="text" class="form-control" placeholder="inséré image " style="width: 40%;margin-left:20%;">-->
              <div class="custom-file" style="width: 50%;margin-left:20%;" style="margin-top: 50px;">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">insérer un photo</label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" style="background-color:blue;margin-left:62%;margin-top:50px; ">INSCRIPTION</button>
        </div>
      </div>
    </div>
  </form>
 <!-- partie js -->
  <script>
         function checkEmail(email) {
             var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
             return re.test(email);
         }
         function validate() {
             var email = document.getElementById("email").value;
         
             if (checkEmail(email)) {
                 alert('Adresse e-mail valide');
             } else {
                 alert('Adresse e-mail non valide');
             }
             return false;
         }
      </script>
      <!--  -->

      <!-- php -->
      <?php
      /* recuppération des saisis */
      $nom= $_POST['nom'];
      $prenom= $_POST['prenom'];
      $email= $_POST['e-mail'];
      $role= $_POST['role'];
      $mot_de_passe= $_POST['mot_de_passe'];
      $prenom= $_POST['validation_mot_de_passe'];
      $prenom= $_POST['validation_mot_de_passe'];
      $prenom= $_POST['customFileLang'];
      /* insertion */
      
      

      ?>
      <!--  -->
</body>

</html>