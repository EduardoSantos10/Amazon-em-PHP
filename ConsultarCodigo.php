<?php

    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;


?>


<!Doctype HTML> 

    <head>

        <meta charset="UTF-8"/>
        <title>Página de Consulta</title>
        <body style="background-image:url('https://img.odcdn.com.br/wp-content/uploads/2023/01/amazon-compras.jpg'); background-repeat: no-repeat; background-size: 100%;"></body>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>


    <body>
  
        <a href="Index.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Selecionar Livro</a>
        <a href="PaginaAtualizar.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Atualizar Carrinho</a>
        <a href="PaginaExcluir.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Excluir Pedido</a><br><br>

        <div id="carouselExampleIndicators" class="carousel slide"></div>

        <form method="POST">

            <label>ISBN: </label>

            <input type="number" name="isbn" id="isbn"><br><br>

            <button type="submit"> Consultar

                <?php

                    if(isset($_POST['isbn'])){

                    //conexão com o banco
                    $conexao = new Conexao();
                
                    //coletar o codigo
                    $isbn = $_POST['isbn'];

                    //chamar o consultar
                    $consultar = new Consultar();
                    echo $consultar -> consultarLivro($conexao, $isbn);
                    }
    
                ?>
            </button>

        </form>
        
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

    </body>

</html>