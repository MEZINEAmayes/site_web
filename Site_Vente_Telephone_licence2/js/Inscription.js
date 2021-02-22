/* remplissage */

function test() {
    var user = document.getElementById("utili").value;
    var psw = document.getElementById("mdp").value;
    var c= document.getElementById("rememberid").checked;
    var a=document.getElementById("e-mail").value;
    var b=document.getElementById("conf").value;
    if (psw=="" || user==""|| a=="" || b=="") {
        alert("Erreur : Veuillez remplir tous les champs");
        
    } else 
      {
        if ( c === false) {
            alert("Veuillez accepter les conditions d'utilisation ");
        }
      }
}

/*verification du mot de passe (longueur)*/

function verifPsw(){
    var psw = document.getElementById("mdp").value;
    chaine = psw.length;
    if(chaine<8 || chaine>15){
        alert("Mot de passe incorrect");
    }
}  

/*verification du mot de passe (similarité)*/

function verification(){
    var psw = document.getElementById("mdp").value;
    var b=document.getElementById("conf").value; 
    if(psw != b){
        alert("Veuillez saisir le même mot de passe");
    }
}
