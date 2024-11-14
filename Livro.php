<?php
    
    namespace PHP\Modelo;
    require_once("Endereco.php");
    use PHP\Modelo\Endereco;


    class Livro{

        // criando as vars
        protected int $isbn;
        protected string $nome;
        protected string $autor;
        protected string $editora;
        protected int $preco;
        protected Endereco $endereco;

        // protected -> uso em herança, apenas as classes da familia (que herda a classe) encherga essa classe


        public function __construct(int $isbn, string $nome, string $autor, string $editora, int $preco, Endereco $endereco){

            // "THIS" diferenciar var de parametro
            $this->isbn = $isbn;
            $this->nome = $nome;
            $this->autor = $autor;
            $this->editora = $editora;
            $this->preco = $preco;
            $this->endereco = $endereco;


        }

        public function __get(string $nome){
            return $this-> $nome;
        }

        public function __set(string $nomeLivro, string $naruto):void{

            $this->nomeVariavel = $naruto;

        }

        public function imprimir():string{
            return "<br>Isbn: ".$this->isbn.  
                   "<br>Nome: ".$this->nome.
                   "<br>Autor: ".$this->autor.
                   "<br>Editora: ".$this->editora.
                   "<br>Preço: ".$this->preco;

        }
    }

?>