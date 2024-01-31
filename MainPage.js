const lire=document.querySelector(".lire")
const more=document.querySelector(".more")
const login=document.querySelector(".login")
const signup=document.querySelector(".SignUp")
const sendmsg=document.getElementById("sub")
const nom=document.getElementById("nom")
const email=document.getElementById("email")
const message=document.getElementById("Message")
const add=document.querySelector(".add")

add.addEventListener("click",()=>{
  window.location.href="Login.php"
})

lire.addEventListener("click",()=>{
    more.style.display="block"
    lire.style.display="none"
})
login.addEventListener("click",()=>{
    window.location.href="login.html"
})
signup.addEventListener("click",()=>{
    window.location.href="SignUp.html"
})
//for message
sendmsg.addEventListener("click",()=>
{
    if (nom.value==""){alert("name input is empty") ; return false;}
    if(email.value=="") {alert("email input is empty") ;return false;}
    if(message.value=="") {alert("message input is empty"); return false;}
})


// Add an event listener to the show password button
const togglePassword = document.querySelector('.toggle-password');
const passwordInput = document.querySelector('#pas');
togglePassword.addEventListener('click', function (e) {
  // Toggle the type attribute of the password input between 'password' and 'text'
  const type = passwordInput.getAttribute('type') === 'pas' ? 'text' : 'pas';
  passwordInput.setAttribute('type', type);
  // Toggle the eye icon
  this.querySelector('i').classList.toggle('fa-eye-slash');
});

  
  
