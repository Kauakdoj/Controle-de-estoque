<?php
session_start();
if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
};
    $logado = $_SESSION['email'];

?>

<html lang="pt-br">
    <head>
    <title>Área privada</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/formatarpalavras.css">
    <link rel="stylesheet" href="./css/estruturas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>
    <body>
    
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;" id="mySidebar"><br>
      <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px; color:white">Close Menu</a>
        <!--SIDEBAR-->
      <div id="sidebar">
        <h1 style="font-size: 24px">Controle de estoque</h1>

        <!--Gerenciamento-->
        <nav class="nav flex-column" .flex-sm-column>
          <h3 class="sbTitulo"><a href="#pgPrincipal">Página Principal</a></h3>
          <a class="nav-link active" aria-current="page" href="#gerenciamento"
            >Gerenciamento</a
          >
          <a class="nav-link" href="#graficos">Gráficos</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Disabled</a>
        </nav>

        <!--Movimentação-->
        <nav class="nav flex-column" .flex-sm-column>
          <h3 class="sbTitulo"><a href="">Movimentação</a></h3>
          <a class="nav-link active" aria-current="page" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
        </nav>

        <!--Administração-->
        <nav class="nav flex-column" .flex-sm-column>
          <h3 class="sbTitulo"><a href="">Administração</a></h3>
          <a class="nav-link active" aria-current="page" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
        </nav>
      </div>
      <div style="text-align:center;margin-bottom:2px"><span style="font-size: 13px;"><?php echo "Você está logado como <b>$logado<b>"?></span></div>
</div>
      <div id="btnSair">
        <a href="./js_php/sair.php">Sair</a>
      </div>
    </nav>
    
    <!-- MENU PARA TELAS PEQUENAS  -->
    <header class="w3-container w3-top w3-hide-large w3-xlarge w3-padding telapq">
      <a href="javascript:void(0)" class="w3-button w3-margin-right telapq" onclick="w3_open()">☰</a>
      <span style="font-size: 16px;">Controle de estoque, <?php echo "você está logado como $logado"?></span>
    </header>
    
    <!-- Responsividade do menu -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    
    <!-- CONTENT -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">
    
    <!-- Header -->
  <div class="w3-container " style="margin-top:80px" id="pgPrincipal">
    <h1 class="w3-jumbo" id="pgPrincipal"><b>Página principal</b></h1>
  </div>

    <!--container-->
  <main class="content">
      <h2 class="w3-xxxlarge CTitulo" id="gerenciamento"><b>Gerenciamento.</b></h2>
      <p class="espc"></p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quod
            iure consectetur impedit totam laudantium voluptatum at tempora
            distinctio maiores? Assumenda reprehenderit laboriosam quibusdam vitae
            hic commodi perferendis vero Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Excepturi nostrum, voluptates facere necessitatibus
            recusandae consequatur voluptate sequi totam! Porro cupiditate velit
            recusandae tempore quos eum officiis hic sint minima non? <br /><br />

            <h2 class="w3-xxxlarge CTitulo" id="graficos"><b>Gráficos.</b></h2>
            <p class="espc"></p>

            <!--GRAFICOS-->
        <div class="grafico">
            <h4 class="w3-xxxlarge"><b>Gráfico de linha.</b></h4>
            <canvas id="myChart" class="item"> </canvas>

            <h4 class="w3-xxxlarge"><b>Gráfico de barras.</b></h4>
            <canvas id="myChart1" class="item"> </canvas>
        </div>
      </div>
</main>


        <div class="w3-light-grey w3-container w3-padding-32" style="font-weight: bold;margin-top:240px;padding-right:58px"><p class="w3-right"> SetInterval Code</p></div>
    
    

    
    <script src="./js_php/w3.js"></script>
    <script src="./js_php/graficos.js"></script>
    </body>
    </html>
    