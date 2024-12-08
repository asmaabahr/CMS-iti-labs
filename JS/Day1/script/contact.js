let promp = prompt("Please enter your name");


while(!isNaN(promp)){
    promp = prompt("Invalid name, Please re-enter your name");    
}

let birthday = parseInt(prompt("Please enter your birth year(less than 2010)"));

while(isNaN(birthday) ){
     birthday = parseInt(prompt("Invalid birthday date, Please re-enter your birth year"));
     if(birthday< 2010){
        birthday = parseInt(prompt("Invalid birthday date, Please re-enter your birth year(less than 2010)"));
     }
}

let age = 2024 - birthday;

document.write("<b><u>Name: </u></b>"+ promp+"<br>");
document.write("<b><u>Birth year: </u></b>"+ birthday+"<br>");
document.write("<b><u>Age: </u></b>"+ age+"<br>");

