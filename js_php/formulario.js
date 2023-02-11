const form = window.document.querySelector("#form");
const campos = window.document.querySelectorAll(".required");
const spans = window.document.querySelectorAll(".span-required");

/*function setError(index){
    campos[index].style.border = `solid 2px`;
    spans[index].style.display = `block`;
}*/

/*form.addEventListener("submit", function (event) {
  event.preventDefault();
  nameValidate();
  emailValidate();
  senhaValidate();
  telefoneValidate();
  cidadeValidate();
  estadoValidate();
  enderecoValidate();
});*/

function setError(index) {
  spans[index].style.display = `block`;
  spans[index].style.color = `red`;
}

function setcorrect(index) {
  campos[index].style.borderBottom = `solid black 1px`;
  spans[index].style.display = `none`;
}

function nameValidate() {
  if (campos[0].value.length < 3) {
    setError(0);
  } else {
    //console.log(`certo`);
    setcorrect(0);
  }
}

function emailValidate() {
  if (campos[1].value.length < 8) {
    setError(1);
  } else {
    //console.log(`certo`);
    setcorrect(1);
  }
}
function senhaValidate() {
  if (campos[2].value.length < 8) {
    setError(2);
  } else {
    //console.log(`certo`);
    setcorrect(2);
  }
}
function telefoneValidate() {
  if (campos[3].value.length < 11) {
    setError(3);
  } else {
    //console.log(`certo`);
    setcorrect(3);
  }
}
function cidadeValidate() {
  if (campos[4].value.length < 3) {
    setError(4);
  } else {
    //console.log(`certo`);
    setcorrect(4);
  }
}
function estadoValidate() {
  if (campos[5].value.length < 3) {
    setError(5);
  } else {
    //console.log(`certo`);
    setcorrect(5);
  }
}
function enderecoValidate() {
  if (campos[6].value.length < 8) {
    setError(6);
  } else {
    //console.log(`certo`);
    setcorrect(6);
  }
}
