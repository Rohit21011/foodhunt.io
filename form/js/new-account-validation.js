function new_account_validation(){
   
    var x1=user_name();
    var x2=user_phone();
    var x3=user_email();
    var x4=user_password1();
    var x5=user_password2();
    if(x1==true && x2==true && x3==true && x4==true && x5==true){
      return true;
    }
    else
    return false;
    
    
}
function user_login(){
    var x1=user_phone();
    var x2=user_password1();
    if(x1==true && x2==true ){
        return true;
      }
      else
      return false;
      
}

function user_name(){
   
    var name=document.getElementById("name").value;
   
    if(name=="" || name==null ){
        document.querySelector("#name").classList.add("valid-form");
        document.getElementById("error").style.display="block";
        return false;
}
else{
    document.querySelector("#name").classList.remove("valid-form");
    document.getElementById("error").style.display="none";
    return true;
}
       
}  
function user_phone(){
   
    var phone=document.getElementById("phone").value;
   
    if(phone=="" || phone==null  ){
        document.querySelector("#phone").classList.add("valid-form");
        document.getElementById("error1").innerHTML="please enter number ";
        return false;
}

else if(phone.length<10 || isNaN(phone)){
    document.querySelector("#phone").classList.add("valid-form");
    document.getElementById("error1").style.display="block";
    document.getElementById("error1").innerHTML="please enter valid number";
    return false;
}
else{
    document.querySelector("#phone").classList.remove("valid-form");
    document.getElementById("error1").style.display="none";
    return true;
}
       
} 
function user_email(){
   
    var email=document.getElementById("email").value; 
    var atposition=email.indexOf("@");  
    var dotposition=email.lastIndexOf(".");  
    if(email=="" || email==null ){
        document.querySelector("#email").classList.add("valid-form");
        document.getElementById("error2").style.display="block";
        return false;
}
else if(atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
    document.querySelector("#email").classList.add("valid-form");
    document.getElementById("error2").style.display="block";
    return false;
}
else{
    document.querySelector("#email").classList.remove("valid-form");
    document.getElementById("error2").style.display="none";
    return true;
}

       
} 
function user_password1(){
   
    var password1=document.getElementById("password1").value;
   
    if(password1=="" || password1==null ){
        document.querySelector("#password1").classList.add("valid-form");
        document.getElementById("error3").style.display="block";
        return false;
}
else{
    document.querySelector("#password1").classList.remove("valid-form");
    document.getElementById("error3").style.display="none";
    return true;
}
       
}   
function user_password2(){
   
    var password1=document.getElementById("password1").value;
    var password2=document.getElementById("password2").value;
    if(password2=="" || password2==null){
        document.querySelector("#password2").classList.add("valid-form");
    document.getElementById("error4").style.display="block";
    document.getElementById("error4").innerHTML="please re-enter password";
    return false;
} else if(password2!=password1){
    document.querySelector("#password2").classList.add("valid-form");
    document.getElementById("error4").style.display="block";
    document.getElementById("error4").innerHTML="password does not match";
    return false;
}

else{
    document.querySelector("#password2").classList.remove("valid-form");
    document.getElementById("error4").style.display="none";
    return true;
}
 


       
}   
    
  
    
