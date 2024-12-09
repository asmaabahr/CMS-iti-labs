let sentence;
function myfunction(sentence){
     
     sentence = sentence.match(/[a-zA-Z0-9]+/gi);
     let large = "";

     for (let i = 0; i < sentence.length; i++) {
         if (sentence[i].length > large.length) {
            large = sentence[i];
         }
     }
     return large;
}
console.log(myfunction("this is a javascript string demo"))