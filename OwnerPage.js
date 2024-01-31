function validateForm() {
    var name = document.getElementById("name");
    var tel = document.getElementById("tel");
    var marque = document.getElementById("marque");
    var nomV = document.getElementById("nom");
    var prix = document.getElementById("prix");
    var moteur = document.getElementById("moteur");
    var carat = document.getElementById("Carat");
    var desc = document.getElementById("Description");
    var image1 = document.getElementById("image1");
    var image2 = document.getElementById("image2");
    var image3 = document.getElementById("image3");
  

    
    if (!name.value || !tel.value || !marque.value || !nomV.value || !prix.value || !moteur.value || !carat.value || !desc.value || !image1.value || !image2.value || !image3.value) {
      alert("Please fill out all fields and select three images.");
      return false;
    }
  
    var nameRegex = /^[a-zA-Z\s]+$/;
   
if (!nameRegex.test(name.value)) {
  alert("Name must contain only letters and spaces.");
  return false;
}
    var marqueRegex = /^[a-zA-Z\s]+$/;
    if (!marqueRegex.test(marque.value)) {
      alert("Marque must contain only letters.");
      return false;
    }
   const numreg=/^0?(5|6|7)\d{8}$/;
    if (!numreg.test(tel.value)) {
      alert("Telephone number must be start byh 5 or 6 or 7 digits long.");
      return false;
    }
  
    if (prix.value < 0) {
      alert("Price must be greater than or equal to 0.");
      return false;
    }
  
    return true;
  }
  