let arr=[];
for(let i=1;i<=5;i++){
    let promp = prompt("Enter number");
    arr.push(promp)

}
console.log(arr)

document.write("<h1>Sorting</h1> <hr>")
document.write("<p><b>u've entered the values : "+ arr+"</b></p>")
document.write("<p><b>ur values after being descending: "+ arr.sort((a,b)=>b-a)+"</b></p>")
document.write("<p><b>ur values after being aescending: "+ arr.sort((a,b)=>a-b)+"</b></p>")