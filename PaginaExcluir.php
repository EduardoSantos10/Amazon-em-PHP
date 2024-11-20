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
        <title>Excluir </title><br><br>
        <body style="background-image:url('https://www.tweeteraser.com/br/resources/wp-content/uploads/2024/05/computer-644457_640.png'); background-repeat: no-repeat; background-size: 100%;"></body>

    </head>

    <body>

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