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
<style>
.body{
    border: 2px;
}
.contenaire{
    height: 10%;
    width: 80%;
    border: 5px;
}
.col{
    width: 25%;
}
.row.input{

    width: 25%; 
}
.logo{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right:10%;
    }
    .menu{
        margin-left: 1300px;
     
    } 
    
</style>
<body>
    <!-- menu -->
    
    <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;" >
         <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
           <div class="menu">
 <nav class="navbar navbar-expand-lg bg-light">
         <div class="container-fluid">
       <!-- <button class="btn btn-outline-success" type="submit"><a href="page_accueil.php"> Accueile</a></button>
           <button class="navbar-toggler" type="button"
           data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
    </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <ul><div>

              </div>
              </ul>
              <button class="btn btn-outline-success" type="submit"><a href="actualite.php">Actualité</a> </button>
             <ul class="dropdown-menu">
           
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
                   <ul><div> </div></ul>
         <button class="btn btn-outline-success" type="submit"><a href="Admissiblite.php">Admissiblité</a> </button>
            <ul><div></div></ul>
            </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit"><a href="Emplois_du_temps.php">Emplois.du.temps</a> </button>
        </form>
      
       </div>
     </div>
    <div class="conect" style="margin-left: 10%;display: flex;gap:10px;">
      <button class="btn btn-outline-success" type="submit"><a href="inscription_employes.php">Incription</a></button> -->
      <button class="btn btn-outline-success" type="submit"><a href="connection.php"> Connection</a></button>
      </div>
</nav>
        </div></div>  
</div>    
        <!-- fin menu -->          
    
                  <div>
                       <img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" 
                       style="height:120px;margin: 26%;width:48%;margin-top:7%;">
                       </div>
                
          <!--  <div class="contenaire" style="height: 60%;border:solid 2px;padding:10%;margin-top:0%;"> -->
                <form style="height: 50px;display: flex;justify-content:center;margin-top:-795px;">
                    <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
                    <div class="contenaire"style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
                    <div class="contenaire"style="margin-left :150px;">
                   <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:10%;">
                   <h1 class="text-center" 
                   style="margin-top:200px;margin-bottom :40px;font-weight:bold;color:#f8f9fa;">PAGE INSCRIPTION  </h1></div> 
                    <div class="row mb-3">
   
                       <div class="col">
                       <label for="nom">NOM</label>
                          <input type="text" class="form-control" placeholder="Nom"id="nom"required style="width: 60%;">
                          <div class="invalid-feedback">
                              Veuillez entrer un nom </div>
                        </div>
                       <div class="col">
                       <label for="prenom">PÉNOM</label>
                         <input type="text" class="form-control" placeholder="Prénom"id="prenom" required style="width: 60%;">
                         <div class="invalid-feedback">
                              Veuillez entrer un prénom
                              </div>
                       </div>
                 </div>
                  <div class="form-row">
                      <div class="col">
                      <label for="e-mail">EMAIL</label>
                          <input type="text" class="form-control" placeholder="e-mail"style="width: 60%;">
                      </div>
                      <div class="col">
                      <label for="role">ROLE</label>
                          <input type="text" class="form-control" placeholder="role"id="prenom" required style="width: 60%;margin-left :10px;">
                          <div class="invalid-feedback">
                              donner votre role
                              </div>
                     </div>
                 </div>
                 <div class="row mb-3">
                       <div class="col">
                       <label for="mot de passe">MOT DE PASSE</label>
                          <input type="text" class="form-control" placeholder="mot de passe"style="width: 60%;">
                        </div>
                       <div class="col">
                       <label for="mot de passe">VALIDER MOT DE PASSE</label>
                         <input type="text" class="form-control" placeholder="mot de passe"style="width: 60%;">
                       </div>
                 </div>
                  
                  <div class="form-row">
                      <div class="col">
                      
                         
                      <!--  <input type="text" class="form-control" placeholder="inséré image " style="width: 40%;margin-left:20%;">
-->
                   <div class="custom-file" style="width: 50%;margin-left:20%;" style="margin-top: 50px;">
              <input type="file" class="custom-file-input" id="customFileLang" lang="es">
            <label class="custom-file-label" for="customFileLang">insérer un photo</label>
              </div>
                      </div>
                      </div>
                      <button type="button" class="btn btn-primary" style="background-color:blue;margin-left:62%;margin-top:50px; ">INSCRIPTION</button>
                    </div>
                  </div>
        </div>
            </form>
     
        </div>
</body>
</html>