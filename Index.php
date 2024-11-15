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
    <link rel="stylesheet" type="text" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

        <body style="background-image:url('https://i.pinimg.com/originals/b8/00/87/b800878ec9ca72ed7f4ebe64e4aa1832.jpg'); background-repeat: no-repeat; background-size: 100%;"></body>

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