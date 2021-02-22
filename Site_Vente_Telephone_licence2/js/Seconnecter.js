function control(){
    var user = document.getElementById("user").value;
    var psw = document.getElementById("pass").value;
    if (psw == "" || user == "") {
        alert("Erreur.Veuillez remplir tous les champs");
        /*document.getElementById("msg").innerHTML = "Erreur, veuillez remplir tous les champs"; */
    } 
}


function verifPsw(){
    var psw = document.getElementById("pass").value; 
    chaine= psw.length;
    if(chaine<8 || chaine>15){
        alert("Mot de passe incorrect");
        /* document.getElementById("msg").innerHTML = "Mot de passe incorrect";  */
    }
}  

