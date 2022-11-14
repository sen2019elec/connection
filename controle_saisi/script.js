
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
         var mot_de_passe=document.getElementById('mot_de_passe');
         var valide_mot_de_passe=document.getElementById('valide_mot_de_passe');
         var error1, error2, error3,error4,error5;


          
            if (!nom.value.trim(e)) {
              error1="Veillez renseignez le nom";
            }
            if (error1) {
              e.preventDefault(e);
              document.getElementById('error1').innerHTML=error1;
              return false;
            }else{
                document.getElementById('error1').innerHTML="";
            }

            if (!prenom.value.trim()) {
                error2="Veillez renseignez le prenom";
              }
              if (error2) {
                e.preventDefault(e);
                document.getElementById('error2').innerHTML=error2;
                return false;
              }
              else{
                document.getElementById('error2').innerHTML=""; }
               if (!email.value.trim()) {
                error3="Veillez renseignez email";
              }
              if (error3) {
                e.preventDefault(e);
                document.getElementById('error3').innerHTML=error3;
                return false;
            }

            else{
        
                document.getElementById('error3').innerHTML=""; } 
           
                if (!mot_de_passe.value.trim()) {
                  error4="Veillez renseignez le mdp";
                }
                if (error4) {
                  e.preventDefault(e);
                  document.getElementById('error4').innerHTML=error4;
                  return false;
                }else{
                    document.getElementById('error4').innerHTML="";
                }
    
                if (!valide_mot_de_passe.value.trim()) {
                error5="Veillez renseignez le mdp";
              }
               if(mot_de_passe.value.trim() !== valide_mot_de_passe.value.trim() ){
                  error5="Les mots de passe ne sont pas identiques";
                  
                } 
              
              if (error5) {
                e.preventDefault(e);
                document.getElementById('error5').innerHTML=error5;
                return false;
              }
              
              else{
                document.getElementById('error5').innerHTML=""; } 
  

        }) 