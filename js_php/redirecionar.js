let logar = window.document.querySelector("#logar");
let cadastro = window.document.querySelector("#cadastrar");

function login() {
  window.location.href = "login.php";
}
function cadastrar() {
  window.location.href = "formulario.php";
}

logar.addEventListener("click", login);
cadastro.addEventListener("click", cadastrar);
