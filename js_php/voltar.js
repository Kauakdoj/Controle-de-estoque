let back = window.document.querySelector("#voltar");

function voltarHome() {
  window.location.replace("home.php");
}

back.addEventListener("click", voltarHome);
