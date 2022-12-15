<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>produtos</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css.css">

   <link rel="icon" type="imagem/png" href="imagens/DG.png" />

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="Inicio.php" class="logo">Depósito do Gaúcho.</a>

   <nav class="navbar">
      <a href="index.php">Início</a>
      <a href="nós.php">Sobre nós</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<section class="Produtos">

</section>


<section class="home-produtos">

   <h1 class="heading-title"> Produtos </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="imagens/brahma.jpg" alt="">
         </div>
         <div class="content">
            <h3>BRAHMA</h3>
            <p>3 latões (470ml) de cerveja brahma por R$12,00</p>
            <a class="btn">R$12,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagens/imperio.jpg" alt="">
         </div>
         <div class="content">
            <h3>IMPÉRIO</h3>
            <p>3 cervejas império por R$11,00 (longneck e latinha (269ml) Gold, latão (470ml), longneck e lata (350ml) Lager</p>
            <a class="btn">R$11,00</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="imagens/itaipava.jpg" alt="">
         </div>
         <div class="content">
            <h3>ITAIPAVA</h3>
            <p>Três latões (470ml) de itaipava por R$10,00</p>
            <a class="btn">R$10,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagens/coca2l.jpg" alt="">
         </div>
         <div class="content">
            <h3>COCA-COLA</h3>
            <p>Refrigerante Coca-cola 2l</p>
            <a class="btn">R$9,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagenS/fanta2l.png" alt="">
         </div>
         <div class="content">
            <h3>FANTA</h3>
            <p>Refrigerante Fanta UVA/LARANJA 2l</p>
            <a class="btn">R$8,00</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="imagens/pepsi2l.jpg" alt="">
         </div>
         <div class="content">
            <h3>PEPSI</h3>
            <p> Refrigerante Pepsi 2l</p>
            <a class="btn">R$8,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagens/agua500ml.jpg" alt="">
         </div>
         <div class="content">
            <h3>ÁGUA</h3>
            <p>Água sem gás 500ml</p>
            <a class="btn">R$2,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagenS/aguac-gas.png" alt="">
         </div>
         <div class="content">
            <h3>ÁGUA</h3>
            <p>Água com gás 500ml</p>
            <a class="btn">R$3,00</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="imagens/guaravita.jpg" alt="">
         </div>
         <div class="content">
            <h3>GUARAVITA</h3>
            <p>Guaravita - suco de guaraná natural</p>
            <a class="btn">R$2,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagens/jackdanielsblack.jpg" alt="">
         </div>
         <div class="content">
            <h3>JACK DANIELS</h3>
            <p>Whisky jack daniels original</p>
            <a class="btn">R$160,00</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagenS/Smirnoff.png" alt="">
         </div>
         <div class="content">
            <h3>SMIRNOFF</h3>
            <p>Vodka Smirnoff original</p>
            <a class="btn">R$43,00</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="imagens/cxheinekenlong.jpg" alt="">
         </div>
         <div class="content">
            <h3>HEINEKEN</h3>
            <p> Cx c/6 unidades de longneck Heineken</p>
            <a class="btn">R$45,00</a>
         </div>
      </div>


         <?php
      include("conexao.php");
      try
      {
         $conecta = new PDO("mysql:host=$host;dbname=$dbname", $user , $pass);
         $consultaSQL = "SELECT id, produto, descricao, preco, img FROM cad_produto";
         $exComando = $conecta->prepare($consultaSQL); //testar o comando
         $exComando->execute(array());
               foreach($exComando as $resultado) 
               {
                  echo "
                     <div class ='box'>
                           <div class ='image'>
                              <img src ='$resultado[img]'>
                           </div>
                           <div class = 'content'>
                              <h3> $resultado[produto] </h3>
                              <p> $resultado[descricao] </p>
                              <a class = 'btn'> $resultado[preco]</a>
                           </div>
                     </div>
                  ";
               }
     
            }catch(PDOException $err)
      {
        // echo("Errrooooo! foi esse: " . $err->getMessage());
      }
      ?>

   </div>

</section>