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

              <button class="btn btn-outline-success" type="submit"><a href="connection.php"> Déconnection</a></button>
              </div>
           </nav>
        </div>
    </div> 
     <!-- fin menu -->  
          <div><img src="photos/images4.jpg" class="img-fluid" alt="Responsive image" 
             style="height:120px;margin: 20%;width:60%;margin-top:5%;">
             </div>
<div class="contenaire"style="background-color:blue;">
<h1>PAGE DE CONNECTION</h1>
</div>
    <div class="contenaire">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5"style=" margin-top:-200px;">
        <div class="card bg-dark text-white" style="border-radius: 2rem; width:150%;height:100%;margin-top:-50px;">
          <div class="card-body p-5 text-center"style="background-color: ;">

            <div class="mb-md-5 mt-md-4 pb-5">
             <div class="form-outline form-white mb-4" style="border-radius: 2px;">
             <label class="form-label" for="typeEmailX" style="margin-left: -500px;">Email</label>
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                
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

</body>
</html>