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
</style>
<body>
      <!-- menu -->

  <div class="logo" style="background-color:#f8f9fa;position:fixed;width:100%;">
    <div><img src="photos/images.jpeg" data-toggle="modal" data-target="#exampleModal"></div>
    <div class="menu">
      <nav class="navbar navbar-expand-lg bg-light" style="margin-left: -50px;">
        <div class="contenaire" style="width: 100px; border:solid 1px; margin-left:-30px;height: 100px;margin-top:1px;">
        <img src="photos/photo1.jpg" alt="" style="width: 100px;height: 100px;"><br><p>  M.FALL:001</p>
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
  <form style="height: 50px;display: flex;justify-content:center;margin-top:-795px;">
    <div class="contenaire" style=" height:30px;padding:10%;margin-top:10px;">
      <div class="contenaire" style="border:solid 2px;height:700px;margin-left:10%; border-radius: 10px;">
        <div class="contenaire" style="margin-left :70px;display:flex; margin-top:150px;">
          <div class="titre" style="border-radius: 5px;background-color:blue;width:60%;margin-left:3px;height: 30px;">
            <p class="text-center" style="margin-bottom :40px;font-weight:bold;
            color:#f8f9fa;">PAGE ADMISTRATEUR </p>
          </div> 
          
          <div>
    <form class="form_control" action=""  >
      <div style=" padding-left:70%;display:flex;justify-content:center;align-items:center;">
      <input class="form_control mr=sm-2" type="text" placeholder="rechercher"style="height: 30px;">
      <button class="btn-successe" type="submit"style="height: 30px;">clique</button>
      </div>
      
    </form></div>
    </div>
    <div class="container">
     
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>E-MAIL</th>
            <th>MATR..</th>
           <th>ROLE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>FALL</td>
            <td>MAMADOU</td>
            <td>fallmodou2012@gmail.com</td>
            <td>001</td>
            <td>ADMISTRATEUR</td>
            <td style=" margin-bottom: 1px;"><i class="fa-sharp fa-solid fa-pen-clip"> </i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
         <tr>
            <td>HANNE</td>
            <td>GONAR</td>
            <td>gona90@gmail.com</td>
            <td>002</td>
            <td>ADMISTRATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
          <tr>
            <td>DIOP</td>
            <td>JOSÉPHINE</td>
            <td>soso90@gmail.com</td>
            <td>003</td>
            <td>ADMISTRATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
          <tr>
            <td>CAMARA</td>
            <td>FATOU</td>
            <td>toufa90@gmail.com</td>
            <td>004</td>
            <td>UTILISATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
          <tr>
            <td>NDIAYE </td>
            <td>AZIZ</td>
            <td>aziz2005@gmail.com</td>
            <td>005</td>
            <td>UTILISATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
          <tr>
            <td>GUEYE</td>
            <td>ABDOU</td>
            <td>guaye80@gmail.com</td>
            <td>006</td>
            <td>UTILISATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
          <tr>
            <td>WADE</td>
            <td>MAMA</td>
            <td>wade2002@gmail.com</td>
            <td>007</td>
            <td>ADMISTRATEUR</td>
            <td><i class="fa-sharp fa-solid fa-pen-clip"></i><i class="fa-sharp fa-solid fa-trash-can"></i><i class="fa-sharp fa-solid fa-share-from-square"></i></td>
          </tr>
        </tbody>
      </table>
      <div>
      <div class="contenaire"style="background-color:grey;width:25px;border:solid 1px;">
      <p>1</p>
     </div class="contenaire" style="display:flexe;justify-content:center;align-items:center;">
     <div class="contenaire"style="background-color:grey;width:25px;border:solid 1px;">
      <p>2</p>
     </div>
     </div>
      </div>

          <button type="button" class="btn btn-primary" style="background-color:blue;margin-left:80%;margin-top:150px; "><a href="page_connection.php"> DECONNECTION</a></button>
         
        </div>
      </div>
   
  </form>
  

</body>
</html>