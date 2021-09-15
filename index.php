<?php
    require_once('model/aluno.php');
    require_once('model/turma.php');

    $alunosTurma = array();
    $novoAluno = new Aluno();
    $novaTurma = new Turma("TURMA 001");

    $novoAluno->setAluno("Eduardo","11111","7","8","6","9");
    $alunosTurma[] = $novoAluno;
    $novoAluno->setAluno("Ricardo","22222","8","8","7","10");
    $alunosTurma[] = $novoAluno;
    $novoAluno->setAluno("Danubia","33333","7","7","9","9");
    $alunosTurma[] = $novoAluno;
    $novoAluno->setAluno("Leticia","44444","9","9","6","8");
    $alunosTurma[] = $novoAluno;
    $novoAluno->setAluno("Gustavo","55555","8","8","8","10");
    $alunosTurma[] = $novoAluno;
    $novoAluno->setAluno("Astolfo","66666","9","6","6","7");
    $alunosTurma[] = $novoAluno;

    for($i=0; $i < count($alunosTurma); $i++) {
        if ($novaTurma->matriculaAluno($alunosTurma[$i])){
            echo "<p>O aluno " . $alunosTurma[$i]->getNome() . " inserido com sucesso na turma. <br>";
        } else {
            echo "<font color='red'> Erro - Turma lotada!</font><br>"; 
        }
    }







?>