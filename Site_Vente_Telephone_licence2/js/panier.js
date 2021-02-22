
    function veri() {
      var a = document.getElementById("carte").value;
      if (a!=20){
        alert("le numéro de la carte bancaire doit avoir 20 caractère");
      }
    }
    function veri2() {
      var b = document.getElementById("carte").value;
      var c = document.getElementById("user").value;
      if (b=='' || c==''){
        alert("Veuillez remplir tous les champs");
      }
    }
    
  