<?php

    class Editora {
        private $id;
        private $nome;
        private $site;
        private $email;

        public function __construct($nome, $site, $email) {
            $this->nome = $nome;
            $this->site = $site;
            $this->email = $email;
        }

        public function inserir($nome,$email,$site){
             
            $stmt = $pdo->prepare("INSERT INTO editora (nome, email, site) VALUES (:nome, :email, :site)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':site', $site);
            $stmt->execute();
        }
        
        public function inserir(){}

        public function buscar($id){
            $stmt = $pdo->query("SELECT * FROM editora WHERE id = $id");
	$editoras = $stmt->fetchAll();
        }

        public function buscarTodos(){  $stmt = $pdo->query("SELECT * FROM editora")
            $editoras = $stmt->fetchAll();}

        public function atualizar($id){}

        public function deletar($id){
            $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
        }
    }

?>