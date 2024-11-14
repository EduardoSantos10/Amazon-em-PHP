<?php

    namespace PHP\Modelo;
    require_once('DAO\Inserir.php');
    require_once('DAO\Conexao.php');
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Conexao;

?>



<!Doctype HTML>

<head>
    <meta charset="UTF-8"/>
    <title>Página Principal</title>
</head>

<body>

    <form method="POST">

        <label>ISBN: </label><br>
        <input type="number" name="isbn" id="isbn"><br><br>

        <label>Nome do Livro: </label><br>
        <input type="texts" name="nome" id="nome"><br><br>

        <label>Autor: </label><br>
        <input type="text" name="autor" id="autor"><br><br>

        <label>Editora: </label><br>
        <input type="text" name="editora" id="editora"><br><br>

        <label>Preço: </label><br>
        <input type="number" name="preco" id="preco"><br><br>

        <button type="submit">Cadastrar

        <?php

            $conexao = new Conexao();// conectando o banco
        
            // pegando os dados do usuário
            $isbn    = $_POST['isbn'];
            $nome    = $_POST['nome'];
            $autor   = $_POST['autor'];
            $editora = $_POST['editora'];
            $preco   = $_POST['preco'];

            // chamar a classe inserir
            $inserir = new Inserir();
            echo $inserir->cadastrarLivro($conexao, $isbn, $nome, $autor, $editora, $preco);
        
        ?>

        </button>

    </form><!--Fim do Formulário-->
    <br><br>
    <a href="menu.php"><button>Voltar</button></a>

</body>

</html>