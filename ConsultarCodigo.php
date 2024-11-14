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

    </head>


    <body>

        <form method="POST">

            <label>ISBN: </label>

            <input type="number" name="isbn" id="isbn"><br><br>

            <button type="submit"> Consultar

                <?php

                    //conexão com o banco
                    $conexao = new Conexao();
                
                    //coletar o codigo
                    $isbn = $_POST['isbn'];

                    //chamar o consultar
                    $consultar = new Consultar();
                    echo $consultar -> consultarIndividual($conexao, $isbn);
    
                ?>
            </button>

        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>

    </body>

</html>