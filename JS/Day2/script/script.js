let username
let nameFormat = /^[A-Za-z]+$/ig; 
do{
     username = prompt("Enter your name..");
}while(! username.match(nameFormat)) 
    console.log(username);

let phone;
let phoneFormat = /^[0-9]{8}$/;
do{
    phone = prompt("Enter your phone number..");
}while(! phone.match(phoneFormat)) 
   console.log(phone);
 
let mobile
let mobileFormat =/^(011|012|010)\d{8}$/
do{
    mobile = prompt("Enter your mobil number..")
}while(! mobile.match(mobileFormat)) 
   console.log(mobile);
 

let email 
let emailFormat=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
do{
    email = prompt("Enter your email..")
}while(! email.match(emailFormat)) 
   console.log(email);

let d1 = new Date();   
let today = d1.getDate(); 

let month =d1.getMonth()+1;

//in document
let colors = prompt("Choose a color for the text: red, green, or blue");

document.write("");

document.getElementById("user").innerHTML="Welcome, dear guest "+ username ;
document.getElementById("user").style.color = colors;

document.getElementById("phone").innerHTML="your telephone number is "+ phone ;
document.getElementById("phone").style.color = colors;

document.getElementById("mobile").innerHTML="your moblie number  is "+ mobile ;
document.getElementById("mobile").style.color = colors;

document.getElementById("address").innerHTML="your email address is "+ email ;
document.getElementById("address").style.color = colors;

document.getElementById("date").innerHTML="today is "+ today ;
document.getElementById("date").style.color = colors;

document.getElementById("month").innerHTML="we are in month "+ month ;
document.getElementById("month").style.color = colors;

// document.getElementById("user").innerHTML="Welcome, dear guest "+ username ;
// document.getElementById("user").style.color = colors;

// document.write('<h3 style="color: ${colors};">Welcome, dear guest ${username}</h3>');
// document.write(`<p style="color: ${color}; font-size: 20px;">BONUS: You chose the color ${color}!</p>`);
