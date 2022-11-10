function checkEmail(email) {
    var re =/^(([^<>()[].,;:\s@"]+(.[^<>()[].,;:\s@"]+)*)|(".+"))@(([^<>()[].,;:\s@"]+.)+[^<>()[].,;:\s@"]{2,})$/i;
      
   }
   function validate() {
       var mail = document.getElementById("email").value;
   
       if (checkEmail(
        mail)) {
           alert('Adresse e-mail valide');
       } else {
           alert('Adresse e-mail non valide');
       }
       return false;
   } 
   var forms=document.getElementById('forms');

   forms.addEventListener ("submit", function(e) {
   var nom = document.getElementById('nom');
   var prenom = document.getElementById('prenom');
   var email = document.getElementById('email');
   
   var error1, error2, error3;


    
      if (!nom.value.trim()) {
        error1="Veillez renseignez le nom";
      }
      if (error1) {
        e.preventDefault();
        document.getElementById('error1').innerHTML=error1;
        return false;
      }else{
          document.getElementById('error1').innerHTML="";
      }

      if (!prenom.value.trim()) {
          error2="Veillez renseignez le prenom";
        }
        if (error2) {
          e.preventDefault();
          document.getElementById('error2').innerHTML=error2;
          return false;
        }
        else{
          document.getElementById('error2').innerHTML=""; }
         if (!email.value.trim()) {
          error3="Veillez renseignez email";
        }
        if (error3) {
          e.preventDefault();
          document.getElementById('error3').innerHTML=error3;
          return false;
      }
      else{
          document.getElementById('error3').innerHTML=""; } 




          
     
  })