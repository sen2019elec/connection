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
  <?php 
include("traitemant/co.php"); ?>

  <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;">
    <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
    <div class="menu">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

          <button class="btn btn-outline-success" ><a href="index.php"> Connection</a></button>
        </div>
      </nav>
    </div>
  </div>

  <!-- fin menu -->

  <div>
    <img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" style="height:120px;margin: 26%;width:48%;margin-top:7%;">
  </div>
  <!-- name permet de voir les infos envoyer dans le bdd -->
  <!-- la methode post est utilisé pour ajouter des informations dans une base de donnés -->
  <form action="" method="post" id="forms"style="height: 50px;display: flex;justify-content:center;margin-top:-795px;" enctype="multipart/form-data">
     <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
      <div class="contenaire" style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
        <div class="contenaire" style="margin-left :150px;"> 
          <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:10%;"> 
            <h1 class="text-center" style="margin-top:200px;margin-bottom :40px;font-weight:bold;color:#f8f9fa;">PAGE INSCRIPTION </h1>
          </div>
          <div class="row mb-3">

            <div class="col">
              <label for="nom">NOM <span style="color: red;">*</span></label>
              <input type="text" class="form-control" placeholder="nom" id="nom" name="nom" style="width: 60%;">
              <p id="error1" style="color:red;"></p>
            </div>
            
            <div class="col">
              <label for="prenom">PÉNOM <span style="color: red;">*</span></label>
              <input type="text" class="form-control" placeholder="prenom" id="prenom" name="prenom"  style="width: 60%;">
              <p id="error2" style="color:red;"></p>
            </div>
          </div>
          <div class="form-row">
            <div class="col">
              <label for="email">EMAIL <span style="color: red;">*</span></label>
              <input type="email" class="form-control" placeholder="email"  id="email" name="email" style="width: 60%;">
              <p id="error3" style="color:red;"></p>
            </div>
            <div class="col">
            <label class="mr-sm-2" for="role" style="margin-left: 6px; ">ROLE</label><br>
            <select class="custom-select mr-sm-2" id="role"  name="role" style="width: 58%;margin-left:7px;">
              <option >Admistrateur</option>
              <option >Utilisateur</option>
              
            </select>
            
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="mot de passe" style="margin-top: 15px;">MOT DE PASSE  <span style="color: red;">*</span></label>
              <input type="password" class="form-control" placeholder="mot_de_passe" id="mot_de_passe" name="mot_de_passe" minlength="8" style="width: 60%;">
              <p id="error4" style="color:red;"></p>
            </div>
           
            <div class="col">
            <label for="mot de passe"style="margin-top: 15px;">VALIDER MOT DE PASSE <span style="color: red;">*</span></label><br>
            <input id="valide_mot_de_passe" type="password"class="form-control"  placeholder="valide_mot_de_passe"minlength="8"style="width: 60%;">
            <p id="error5" style="color:red;"></p>
            <p id="error5" style="color:red;"></p>
            </div>
          </div>

          <div class="form-row">
           <!-- <div class="col"> -->
          <!--       <input type="text" class="form-control" placeholder="inséré image " style="width: 40%;margin-left:20%;"> 
              <div class="custom-file" style="width: 50%;margin-left:20%;" style="margin-top: 50px;">
                <input type="file" class="custom-file-input" id="photo" lang="fr" name="photo">
                <label class="custom-file-label" for="customFileLang">insérer un photo</label>
              </div> 
            </div>  -->

           <div class="col">
  <div>
    <input type="file" id="photo" name="photo"
          accept=".jpg, .jpeg, .png">
  </div>
  <div>
  <input type="submit" name="submit" class="btn btn-primary" style="background-color:blue;margin-left:62%;margin-top:20px; " value="INSCRIPTION">
        </div>
</div>

         <!--  </div> -->
        
      </div>
    </div>
    </div> 
  

  <style>
 

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
</style>


<script src="script.js"></script>
</body>
</html>