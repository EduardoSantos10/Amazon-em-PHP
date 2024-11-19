<?php


    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;

?>

<!Doctype HTML>


    <head>
        <meta charset="UTF-8">
        <title>Página Atualizar</title>
        <body style="background-image:url('https://blog.tcitechs.com/wp-content/uploads/2021/04/software-update-popups.png'); background-repeat: no-repeat; background-size: 100%;"></body>

    </head>

    <body>

        

        <form method="POST">
            <label>ISBN: </label>
            <input type="number" name="isbn" id="isbn"/><br><br>

            <label>Campo: </label>
            <select name="atualizacao">
                <option value="nome">Nome: </option>
                <option value="autor">Autor: </option>
                <option value="preco">Preço: </option>
            </select><br><br>

            <label>Novo Dado: </label>
            <input type="text" name="novoDado" id="novoDado"/><br><br>

            

        <button type="submit">Atualizar

            <?php
            $conexao = new Conexao();
            $atualizar = new Atualizar();

            $isbn = $_POST['isbn'];
            $campo = $_POST['atualizacao'];
            $novoDado = $_POST['novoDado'];

            echo $atualizar -> atualizarLivro($conexao, $campo, $novoDado, $isbn);
            
            ?>

        </button>
        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

        <a href="Menu.php" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true"><button>Voltar</button></a><br><br>

    </body>

</html>