<?php

    class Aluno {
        protected $nome;
        protected $ra;
        protected $nota1;
        protected $nota2;
        protected $nota3;
        protected $nota4;

        public function setAluno($nomeAluno,$nra,$n1,$n2,$n3,$n4){
            $this->nome = $nomeAluno;
            $this->ra = $nra;
            $this->nota1 = $n1;
            $this->nota2 = $n2;
            $this->nota3 = $n3;
            $this->nota4 = $n4;
        }
        public function getNome(): string {
            return $this->nome;
        }

        public function getNotas(){
            $notas = array();
            $notas[0] = $this->nota1;
            $notas[1] = $this->nota2;
            $notas[2] = $this->nota3;
            $notas[3] = $this->nota4;

            return $notas;
        }

        public function getMedia(): float {
            return (($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4);
        }
    }
?>