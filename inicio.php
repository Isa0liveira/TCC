<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Início</title>

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
      <a href="Produtos.php">Produtos</a>
      <a href="nós.php">Sobre nós</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<main class="main">

   <section class="galery">
       <div class="fotos">
           <img src="./imagens/brahma.jpg" alt="Foto 1">
           <img src="./imagens/itaipava.jpg" alt="Foto 2">
           <img src="./imagens/imperio.jpg" alt="Foto 3">
           <img src="./imagens/petra.jpg" alt="Foto 4">
           <img src="./imagens/whiske.jpg" alt="Foto 5">
       </div>
   </section>

</main>



<section class="home-produtos">

   <h1 class="heading-title"> Produtos </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="imagens/cerveja.png" alt="">
         </div>
         <div class="content">
            <h3>Bebida Alcóolica</h3>
            <p>Cerveja, Vodka, Whisky, Gin, Ice, Vinhos, entre outros.</p>
            <a href="alcóolicos.php" class="btn">Clique aqui!</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="imagens/refri.png" alt="">
         </div>
         <div class="content">
            <h3>Refrigerantes</h3>
            <p>Coca-cola, Fanta Uva, Fanta Laranja, entre outros</p>
            <a href="refrigerante.php" class="btn">Clica aqui!</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="imagens/mercadinho.png" alt="">
         </div>
         <div class="content">
            <h3>Entre outros</h3>
            <p> água, suco, isotônico, entre outros.</p>
            <a href="outros.php" class="btn">Clica aqui!</a>
         </div>
      </div>

   </div>

</section>


<section class="home-offer">
   <div class="content">
      <h3>Sobre nós</h3>
      <p>Somos um depósito de bebidas localizado à 2km da Praia Grande em Arraial do Cabo desde 1972!
         <br>
            Funcionamos das 8h às 22h, seg-dom.
         </br>
      </p>
      <a href="https://www.google.com/maps/place/Tv.+Arthur+Bernardes,+14+-+S%C3%ADtio,+Arraial+do+Cabo+-+RJ,+28930-000/@-22.9693211,-42.0299945,21z/data=!4m5!3m4!1s0x971970400a390b:0x92473729c844de39!8m2!3d-22.969348!4d-42.0299404" class="btn">Localização</a>
   </div>
</section>


<section class="footer">


      <div class="box">
         <h3>Telefone para contato</h3>
         <a href="#"> <i class="fas fa-phone"></i> +55 (22) 9837-5497  </a> 
      </div>

   </div>

   <div class="credit"><span>Depósito do Gaúcho.</span>
   </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>