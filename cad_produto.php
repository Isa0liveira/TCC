<?php
include_once 'conexao.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área do administrador</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css.css">

    <link rel="icon" type="imagem/png" href="imagens/DG.png" />

    
    </head>

    <body>
        
        <section class="header">

            <a href="Inicio.php" class="logo">Depósito do Gaúcho.</a>
        
            <nav class="navbar">
            <a href="index.php">sair</a>
            </nav>
        
            <div id="menu-btn" class="fas fa-bars"></div>
        
        </section>
        
        <form action="" method="post" enctype="multipart/form-data">
            <h1 class="heading-title"> ADICIONAR PRODUTO </h1>
            <br>

            <div class="input-group">
                <p>Imagem(URL):</p>
                <input type="text" placeholder="link da imagem" name="img" required>
            </div>
            <br>

            <div class="input-group">
                <p>Nome:</p>
                <input type="text" placeholder="Nome do produto..." name="produto" required>
            </div>
            <br>
            
            <div class="input-group">
            <p>Descrição:</p>
                <input type="text" placeholder="descrição do produto..." name="descricao" required>
            </div>
            <br>

            <div class="input-group">
                <p>Preco:</p>
                <input type="text" placeholder="valor do produto" name="preco" required>
            </div>
            <br>

            
            <button class="btn-blue" type="submit"> 
                <a input type="submit" value="Cadastrar" name="enviar">cadastrar produto</a>
            </button>

        </form>

        <?php
            require("conexao.php");

            if (($_POST)&&(isset($_POST['produto'])) && (isset($_POST['descricao'])) && (isset($_POST['preco'])) && (isset($_POST['img']))) {
                require("conexao.php");
                $produto = $_POST['produto'];
                $descricao = $_POST['descricao'];
                $preco = $_POST['preco'];
                $img = $_POST['img'];

                //$arquivo = $_FILES["arquivo"]["tmp_name"]; 
                //$tamanho = $_FILES["arquivo"]["size"];
                //$tipoI    = $_FILES["arquivo"]["type"];
                //$nomeI  = $_FILES["arquivo"]["name"];
        
                $sql = "SELECT * from cad_produto";
                $query = $conn->query($sql);
                $row = $query->num_rows;
                if ($row == 0) {
                            try {
                                $conecta = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); //istancia a classe PDO
                                $comandoSQL = "INSERT INTO cad_produto VALUES ('0','$produto','$descricao', '$preco', '$img')";
                                $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
                                $grava->execute(array());
                                echo "<br/><div align='center'>
                                        Arquivo enviado com sucesso para o servidor!
                                    </div>";
                            } catch (PDOException $err) { // caso retorne erro
                                //echo 'Erro'  . $err->getMessage();
                            }
                        
                   
                } else {
                    echo "<div align='center'> --------------Produto já cadastrado!---------------- </div>";
                }
            };
        ?>
    </body>
 </html>