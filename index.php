<?php
ob_start();
require('./sheep_core/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja MusicVinil.com.br</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!---TOPO DO SITE--->

<div class="header">
    <p class="logo">Loja MusicVinil</p>
    <div class="cart"><i class="fa fa-shopping-cart"></i>
        <p>0</p>
    </div>
</div>

<!---FIM TOPO DO SITE--->

<!---CORPO DO SITE--->

<div class="container">
    <!---LINHA PRODUTO DO SITE--->
    <div class="linha-produtos">

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/páthos.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Conjurer - Páthos</p>
            <h2>R$ 220,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/ghost reveries.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Opeth - Ghost Reveries</p>
            <h2>R$ 310,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/Sepultura-Beneath-the-Remains.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Sepultura - Beneath the Remains</p>
            <h2>R$ 350,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/Y4LPCE292.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Imperial Triumphant - Alphaville</p>
            <h2>R$ 210,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/dio11.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Dio - Holy Diver</p>
            <h2>R$ 450,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    <!---INICIO PRODUTO---->
    <form action="filtros/criar.php" method="post">
     <div class="corpoProduto">
        <div class="imgProduto">
            <img src="assets/img/black-sabbath1-2.jpg" alt="" class="produtoMiniatura" />
        </div>
         <div class="titulo">
            <p>Black Sabbath - Black Sabbath</p>
            <h2>R$ 500,00</h2>
            <input type="hidden" name="id_produto" value="">
            <input type="hidden" name="valor" value="">
            <button type="submit" class="button" name="addcarrinho">Adicionar ao carrinho</button>
         </div>
     </div>
     </form>
    <!--FIM INICIO PRODUTO?--->

    </div>
     <!---FIM LINHA PRODUTO--->

     <!---BARRA LATERAL DO SITE--->

     <div class="barraLateral">

     <div class="topoCarrinho">
        <p>Meu Carrinho</p>
     </div> 

     <!---INICIO PRODUTO CARRINHO--->
     
     <div class="item-carrinho">
         <div class="linha-da-imagem">
            <img src="assets/img/páthos.jpg" alt="" class="img-carrinho">
         </div>
         <p>Conjurer - Páthos</p>
         <h2>R$ 220,00</h2>
         <form action="filtros/excluir.php" method="post">
            <input type="hidden" name="id_produto" value="">
            <button type="submit" style="border:none; background:none;"><i class="fa fa-trash-o"></i></button>
         </form>
     </div>

     <!---FIM PRODUTO CARRINHO---->
     <div class="item-carrinho-vazio">Seu carrinho está vazio</div>

     <div class="rodape">
       <h3>Total</h3>
       <h2>R$ 220,00</h2>
     </div>

    </div> 
     <!---FIM BARRA LATERAL DO SITE-->

</div>

<!---Fim CORPO DO SITE--->

</body>
</html>