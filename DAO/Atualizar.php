<?php

    namespace PHP\Modelo\DAO;

    use Exception;
    require_once('Conexao.php');
    use \PHP\Modelo\DAO\Conexao;

    class Atualizar
    {

       /* function atualizarPessoa(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            string $codigo
        ){
            try{
                $conn = $conexao -> conectar();
                $sql = "update pessoa set $campo = 
                        '$novoDado' where codigo = '$codigo'";

                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar!";
                }

            }
            catch(Exception $erro)
            {

                echo $erro;

            }

        }*/

        function atualizarLivro(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            string $isbn
        ){
            try{
                $conn = $conexao -> conectar();
                $sql = "update livro set $campo = 
                        '$novoDado' where isbn = '$isbn'";

                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "<br>Atualizado com sucesso!";
                }else{
                    echo "<br><br>Não foi possivel atualizar!";
                }

            }
            catch(Exception $erro)
            {

                echo $erro;

            }

        }

    }// fim do atualizar
?>