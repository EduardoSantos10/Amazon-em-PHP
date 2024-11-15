<?php

    namespace PHP\Modelo\DAO;

    use Exception;
    require_once('Conexao.php');
    use \PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirPessoa
        (

            Conexao $conexao,
            int $codigo


        )
        {

            try{

                $conn = $conexao -> conectar();
                $sql = "delete from pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){

                    echo"<br>Excluido com sucesso!";

                }else{

                    echo "<br><br>Não foi possivel excluir!";

                }
            }
            catch(Exception $erro)
            {
                echo $erro;

            }// fim do catch
        }

        function excluirLivro
        (

            Conexao $conexao,
            int $isbn


        )
        {

            try{

                $conn = $conexao -> conectar();
                $sql = "delete from livro where isbn = '$isbn'";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){

                    echo"<br>Excluido com sucesso!";

                }else{

                    echo "<br><br>Não foi possivel excluir!";

                }
            }
            catch(Exception $erro)
            {
                echo $erro;

            }// fim do catch
        }
    }

?>