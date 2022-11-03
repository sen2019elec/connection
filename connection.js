
 function checkEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
function validate() {
    var email = document.getElementById("e-mail").value;

    if (checkEmail(email)) {
        alert('Adresse e-mail valide');
    } else {
        alert('Adresse e-mail non valide');
    }
    return false;
}  

var forms=document.getElementById('forms');
forms.addEventListener ("submit", function(e) {
var email = document.getElementById('email');
var mot_de_passe=document.getElementById("mot_de_passe");
var error1, error2;
if (!email.value.trim()) {
  error1="Veillez renseignez email";
}
if (error1) {
  e.preventDefault();
  document.getElementById('error1').innerHTML=error1;
  return false;
}
else{
  document.getElementById('error1').innerHTML=""; } 

   if (!mot_de_passe.value.trim()) {
     error2="Veillez renseignez le mot de passe";
   }
   if (error2) {
     e.preventDefault();
     document.getElementById('error2').innerHTML=error2;
     return false;
   }else{
       document.getElementById('error2').innerHTML="";
   }
})
