<?php

namespace PHP\Modelo;
require_once('DAO\Conexao.php');
require_once('DAO\Excluir.php');
use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Excluir;

?>

<!Doctype HTML>


    <head>

        <meta charset="UTF-8">

        <body style="background-image:url('https://www.tweeteraser.com/br/resources/wp-content/uploads/2024/05/computer-644457_640.png'); background-repeat: no-repeat; background-size: 100%;"></body>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    </head>

    <body>


         
        <a href="Index.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Selecionar Livro</a>
        <a href="ConsultarCodigo.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Consultar Pedido</a>
        <a href="PaginaAtualizar.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Atualizar Carrinho</a><br><br>

        <form method="POST">
            <label>ISBN: </label>
            <input type="number" name="isbn" id="isbn"/><br><br>

            <button type="submit">Excluir

                <?php

                    if(isset($_POST['isbn'])){
                
                    $conexao = new Conexao();
                    $isbn = $_POST['isbn'];
                    $excluir = new Excluir();
                    $excluir-> excluirLivro($conexao, $isbn);
                    
                    }
                
                ?>

            </button>
        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

    </body>



</html>