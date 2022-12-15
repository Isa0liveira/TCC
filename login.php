
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css.css">

   <link rel="icon" type="imagem/png" href="imagens/DG.png" />

</head>

<body>
    <section class="header">

        <a class="logo">Depósito do Gaúcho.</a>
     
        <nav class="navbar">
           <a href="index.html">Início</a>
           <a href="Produtos.html">Produtos</a>
           <a href="nós.html">Sobre nós</a>
        </nav>
     
        <div id="menu-btn" class="fas fa-bars"></div>
     </section>
    
     <h1 class="heading-title"> ÁREA DO ADMINISTRADOR </h1>
     <form>
        <div class="login-box">

            <img class="id" src="imagens/id.png" width="150">
            <div class="msg"><label>Email</label></div>
            <input type="email" class="cx" name="email" id="email" placeholder="seu nome de usuário"/>
            
        <div>
            <div class="msg"><label>Senha</label></div>
            <input type="password" class="cx" name="password" id="pass" placeholder="Senha"/>

        </div>
        <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter
                logado</label>
          </p>

          <div>
            <input type="submit" onclick="logar(); return false">
        </div>


        <script>
            function logar(){
                var email = document.getElementById('email');
                var pass = document.getElementById('pass');
    
                console.log(email.value+pass.value);
    
                if(email.value == "admin@gmail.com" && pass.value == "admin"){
                    location.href = "cad_produto.php";
                    alert('Logado!');
                    localStorage.setItem("acesso", true);
                } else {
                    alert("Usuário ou senha inválidos!");
                }
            }
        </script>
    </body>

    </form>

</body>


</html>