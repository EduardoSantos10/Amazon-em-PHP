<?php

    namespace PHP\Modelo\DAO;
    require_once("Conexao.php");
    use PHP\Modelo\DAO\Conexao;


    class Consultar{

        function consultarIndividual(Conexao $conexao, int $codigo){

            try{

                $conn = $conexao->conectar();
                $sql = "select * from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result))
                {
                    if($dados['codigo'] == $codigo){
                        echo "<br>Codigo: ".$dados['codigo'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Telefone: ".$dados['telefone'].
                             "<br>Endereço: ".$dados['endereco'];
                        return; //encerrar o processo 
                    }
                    echo "Codigo digitado não é válido!";
                }

            }catch(\Exception $erro)
            {

                echo $erro;

            }

        }

        function consultarLivro(Conexao $conexao, int $isbn){

            try{

                $conn = $conexao->conectar();
                $sql = "select * from livro where isbn = '$isbn'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_array($result))
                {
                    if($dados['isbn'] == $isbn){
                        echo "<br>ISBN: ".$dados['isbn'].
                             "<br>Nome: ".$dados['nome'].
                             "<br>Autor: ".$dados['autor'].
                             "<br>Editora: ".$dados['editora'].
                             "<br>Preço: ".$dados['preco'];
                        return; //encerrar o processo 
                    }
                    echo "Codigo digitado não é válido!";
                }

            }catch(\Exception $erro)
            {

                echo $erro;

            }

        }

    }

?>