/*function IsEmail(email){
    var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    var check=/@[w-]+./;
    var checkend=/.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
    else {return true;}
}*/

const form = window.document.querySelector("#submit");
const campos = window.document.querySelectorAll(".inputUser");
const spans = window.document.querySelectorAll(".labelInput");

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
  campos[index].style.border = `solid 1px`;
  spans[index].style.display = `block`;
}

function setcorrect(index) {
  campos[index].style.border = `none`;
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
  if (campos[1].value.length < 12) {
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
  if (campos[3].value.length < 8) {
    setError(3);
  } else {
    //console.log(`certo`);
    setcorrect(3);
  }
}
function cidadeValidate() {
  if (campos[4].value.length < 8) {
    setError(4);
  } else {
    //console.log(`certo`);
    setcorrect(4);
  }
}
function estadoValidate() {
  if (campos[5].value.length < 8) {
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
