<?php

    class Ebook {
        private $id;
        private $titulo;
        private $descricao;
        private $isbn;
        private $data_publicacao;
        private $preco;
        private $idioma;
        private $foto;

        public function __construct($titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto) {
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->isbn = $isbn;
            $this->data_publicacao = $data_publicacao;
            $this->preco = $preco;
            $this->idioma = $idioma;
            $this->foto = $foto;
        }


        public function inserir($id,$titulo,$foto){
             
            $stmt = $pdo->prepare("INSERT INTO ebook (id, titulo, descricao, isbn, data_publicao, preco, idioma, foto) VALUES (:id, :titulo, :descricao, :isbn, :data_publicao, :preco, :idioma, :foto)");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':data_publicacao', $data_publicacao);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->execute();
        }

        public function inserir(){}

        public function buscar($id){
            $stmt = $pdo->query("SELECT * FROM ebook WHERE id = $id");
	$ebooks = $stmt->fetchAll();
        }

        public function buscarTodos(){  $stmt = $pdo->query("SELECT * FROM ebook")
            $ebooks = $stmt->fetchAll();}

        public function atualizar($id, $titulo, $descricao, $isbn, $data_publicacao, $preco, $idioma, $foto){
            $stmt = $pdo->prepare("UPDATE pessoas SET titulo = :titulo, descricao = :desricao, isbn = :isbn, data_publicacao = :data_publicacao, preco = :preco, idioma = :idioma foto = :foto WHERE id = :id");
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':data_publiacao', $data_publicacao);
            $stmt->bindParam(':preco', $idioma);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute();
        }

        public function deletar($id){
            $stmt = $pdo->prepare('DELETE FROM ebook WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
        }
    }

?>