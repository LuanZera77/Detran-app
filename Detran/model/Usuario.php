<?php

    class Usuario{
        
        private $id;
        private $nome;
        private $dataNascimento;
        private $telefone;
        private $email;
        private $senha;

        function __construct($id,$nome,$dataNascimento,$telefone,$email,$senha){
            $this->id = $id;
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function setid($id){
            $this ->id = $id;
        }
        public function setNome($nome){
            $this ->nome = $nome;
        }
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getDataNascimento(){
            return $this->dataNascimento;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getSenha(){
            return $this->senha;
        }


    }

?>