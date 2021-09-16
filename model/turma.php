<?php

    require_once('model/aluno.php');
    
    class Turma {
        protected $alunos;
        public $nomeTurma;

        function __construct($turma){
            $this->nomeTurma = $turma;
            $this->alunos = array();
        }

        public function getNomeTurma(){
            return $this->nomeTurma;
        }

        public function getAlunos(){
            return $this->alunos;
        }

        public function matriculaAluno($aluno) {
            if(count($this->alunos) < 5) {
                $this->alunos[] = $aluno;
                return true;
            } else
                return false;
        }

        public function mediaTurma(): float{
            $soma = 0;
            for($i=0; $i < count($this->alunos); $i++) {
                $soma += $this->alunos[$i]->getMedia();
            }
            return $soma/count($this->alunos);
        }

        
    }

?>