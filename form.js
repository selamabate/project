  const usernameInput = document.getElementById("username");
const passwordInput=document.getElementById("password");
    const a=document.querySelector("p");
    const b=document.getElementById("m");
    const c=document.getElementById("x");
    const d=document.getElementById("y");
    const f=document.getElementById("text");
    function page(){
        window.location.href="home.html";
    }

function validateForm() {
  
    //USERNAME
   if(usernameInput.value.length>4){
        a.innerHTML="";
   
    }
    else {
       
        a.innerHTML="Invalid name!";
    }}
    function change(){
    
    if(passwordInput.value.length>6){
      
        b.innerHTML="";
     
    }else {
      
        b.innerHTML="invalid password!";
    }
}
function signin(){
    if(usernameInput.value.length>2 && passwordInput.value.length>6)
    {
        page();
    }
   
const name=localStorage.setItem("uname",usernameInput.value);
const pass=localStorage.setItem("upass",passwordInput.value);
}



