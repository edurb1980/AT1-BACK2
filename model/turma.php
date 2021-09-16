<?php
    class Turma {
        protected $alunos;
        public $nomeTurma; 

        //1.1. Criar um atributo que armazene o nome da turma pelo método construtor.
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

        //1.2.  Deve haver um método que adicione no máximo 5 objetos de alunos. 
        //      Sendo assim, está função deve devolver um valor booleano para sucesso e false para erro.
        public function addAluno($aluno) {
            if(count($this->alunos) < 5) {
                $this->alunos[] = $aluno;
                return true;
            } else {
                return false;
            }
        }

        public function mediaTurma(){
            $soma = 0;
            for($i=0; $i < count($this->alunos); $i++) {
                $soma += $this->alunos[$i]->getMedia();
            }
            return $soma/count($this->alunos);
        }
    }
?>