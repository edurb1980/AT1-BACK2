<?php

    class aluno {
        protected $nome;
        protected $ra;
        protected $nota1;
        protected $nota2;
        protected $nota3;
        protected $nota4;

        public function getMedia(){
            return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
        }
    }
?>