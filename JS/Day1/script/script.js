//Task one
alert("Welcome to my site");
let username = prompt("Please enter your name");
document.write("<h1>Welcom "+ username + "</h1>")

//Task two
let temperature = (t) => {
    return (t >= 30)? "<h3>Today is Hot </h3>": "<h3>Today is Cold </h3>"
};

document.write(temperature(6))