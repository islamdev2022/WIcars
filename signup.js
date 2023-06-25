// declare varivales and constants
const fname = document.querySelector("#Fname")
const lname = document.querySelector("#Lname")
const email = document.querySelector("#email")
var pass =document.querySelector("#pass")
var cpw = document.querySelector("#Cpass")
const sub= document.querySelector(".submit")
var regexX = /^[a-zA-Z]+$/
var Regexemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


//sign up submit button....................
sub.onclick=function(){
    testfname()
    testlname()
    testmail()
    testpassword()
    connpsw()
};
//Start of functions of sign up form....................
function testfname()
{if (fname.value==""){alert("firstname input is empty ! ") ;return false;}
  else  if (!regexX.test(fname.value)){alert("Fname must only contains letters");return false
}}

function testlname()
{
    if (lname.value==""){alert("lastname input is empty ! ")}
 else if (!regexX.test(lname.value)){alert("Lname must only contains letters")
}}
function testpassword()
{if (pass.value == "") 
{
    alert("Input Empty of password!!")
}else
   {if ( (pass.value.length <6 )||(pass.value.length>15) ||(/^\d+$/.test(pw)==true)||(/^[a-zA-Z]+$/.test(pass)==true) )
    {alert("Password invalid");}} 
}
function connpsw(){
    if (cpw.value=="")
    {alert("you should confirm your password !")}
    else {
    if (pass.value!=cpw.value)
    {alert("confirm pass properly !");
    return false;
}}
}
function testmail()
{
    if((email.value==""))
    {alert("Input Empty of email!!");
return false;
}
    else if (Regexemail.test(email.value)==false){alert("false email");
    return false;
}

}



// FOR PASSWORD 
    // Add an event listener to the show password button
    const togglePassword = document.querySelector('#toggle-password');
    const passwordInput = document.querySelector('#pass');
    togglePassword.addEventListener('click', function (e) {
      // Toggle the type attribute of the password input between 'password' and 'text'
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      // Toggle the eye icon
      this.querySelector('i').classList.toggle('fa-solid fa-eye-slash');
    });


// TO CONFRIM PASSWORD
    const toggleCPassword = document.querySelector('#toggle-Cpassword');
    const pInput = document.querySelector('#Cpass');
    toggleCPassword.addEventListener('click', function (e) {
      // Toggle the type attribute of the password input between 'password' and 'text'
      const type = pInput.getAttribute('type') === 'password' ? 'text' : 'password';
      pInput.setAttribute('type', type);
      // Toggle the eye icon
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });

//END................................
