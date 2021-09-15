<?php

    require_once('model/aluno.php');
    
    class turma {
        protected $alunos;
        public $nomeTurma;

        function __construct($turma){
            $this->nomeTurma = $turma;
            $this->alunos = array();
        }

        public function matriculaAluno($aluno):int {
            if(count($this->alunos) < 4) {
                $this->alunos[] = $aluno;
                return 1;
            } else
                return 0;
        }

        public function mediaTurma(): float{
            $soma = 0;
            for($i=0; $i < count($this->alunos); $i++) {
                $soma += $this->alunos[$i]->getMedia();
            }
            return $soma/count($this->notas);
        }

        
    }

?>