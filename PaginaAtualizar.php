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

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
        
    </head>

    <body>
         
        <a href="Index.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Selecionar Livro</a>
        <a href="ConsultarCodigo.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Consultar Pedido</a>
        <a href="PaginaExcluir.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Excluir Pedido</a><br><br>

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

            if(isset($_POST['isbn'],$_POST['atualizacao'],$_POST['novoDado'])){
            $conexao = new Conexao();
            $atualizar = new Atualizar();

            $isbn = $_POST['isbn'];
            $campo = $_POST['atualizacao'];
            $novoDado = $_POST['novoDado'];

            echo $atualizar -> atualizarLivro($conexao, $campo, $novoDado, $isbn);
                }
            ?>

        </button>
        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

    </body>

</html>