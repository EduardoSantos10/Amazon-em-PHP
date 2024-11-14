<?php

namespace PHP\Modelo;
require_once('DAO\Conexao.php');
require_once('DAO\Excluir.php');
use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Excluir;

?>

<!Doctype HTML>


    <head>

        <meta charset="UTF-8"
        <title>Excluir:</title><br><br>

    </head>

    <body>

        <form method="POST">
            <label>ISBN: </label>
            <input type="number" name="isbn" id="isbn"/><br><br>

            <button type="submit">Excluir

                <?php
                
                    $conexao = new Conexao();
                    $isbn = $_POST['isbn'];
                    $excluir = new Excluir();
                    $excluir-> excluirPessoa($conexao, $isbn);
                
                ?>

            </button>
        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

    </body>



</html>