let table = document.createElement("table");
table.style.width = "100%";
table.style.border = "1px solid gray";
document.body.appendChild(table);

let row = document.createElement("tr");


let thead = ["ID", "Name", "Email", "See more"];
thead.forEach((headerText) => {
  let th = document.createElement("th");
  th.innerText += headerText;
  th.style.padding = "10px";
  th.style.border = "1px solid grey";
  row.appendChild(th);
});
table.appendChild(row);



let databyId = document.createElement("input");
databyId.setAttribute("type", "number");
databyId.placeholder = "enter ID";
databyId.style.padding = "10px";
databyId.style.margin = "10px";
databyId.style.border = "1px solid grey";
databyId.style.borderRadius = "4px";
document.body.appendChild(databyId);

let databyIdbtn = document.createElement("button");
databyIdbtn.textContent = "Find";
databyIdbtn.style.padding = "10px 20px";
databyIdbtn.style.border = "none";
databyIdbtn.style.borderRadius = "4px";
document.body.appendChild(databyIdbtn);
databyIdbtn.addEventListener("click", () => {
    let id = databyId.value;
    GetDataById(id);
  });
  


function GetDataBYID() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "https://jsonplaceholder.typicode.com/users");
  xhr.send("");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.response);
      let res = JSON.parse(xhr.response);
      addDatatotable(res);
    }
  };
}


function addDatatotable(data) {
  data.forEach((item) => {
    let row = document.createElement("tr");

    let idCell = document.createElement("td");
    idCell.textContent = item.id;
    idCell.style.padding = "10px";
    idCell.style.border = "1px solid #ccc";

    let nameCell = document.createElement("td");
    nameCell.textContent = item.name;
    nameCell.style.padding = "10px";
    nameCell.style.border = "1px solid #ccc";

    let emailCell = document.createElement("td");
    emailCell.textContent = item.email;
    emailCell.style.padding = "10px";
    emailCell.style.border = "1px solid #ccc";

    let actionsCell = document.createElement("td");
    actionsCell.style.padding = "10px";
    actionsCell.style.border = "1px solid #ccc";

    let seeMorebtn = document.createElement("button");
    seeMorebtn.textContent = "see more";
    seeMorebtn.style.padding = "5px 10px";
    seeMorebtn.style.border = "none";
    seeMorebtn.style.borderRadius = "4px";
    seeMorebtn.addEventListener("click", () => alert(JSON.stringify(item)));
    actionsCell.appendChild(seeMorebtn);

    row.appendChild(idCell);
    row.appendChild(nameCell);
    row.appendChild(emailCell);
    row.appendChild(actionsCell);

    table.appendChild(row);
  });
}


function GetDataById(id) {
  let inp = databyId.value;
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "https://jsonplaceholder.typicode.com/users/"+inp);
  xhr.send("");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200)  {
        console.log(xhr.response);
        let data = JSON.parse(xhr.response);
        alert("ID: "+ data.id +" Name: " +data.name+" Email: "+data.email);
    }
  };
}


GetDataBYID();
