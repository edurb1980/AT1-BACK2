<?php
    require_once('model/aluno.php');
    require_once('model/turma.php');

    $alunosTurma = array();
    $novoAluno1 = new Aluno();
    $novoAluno1->setAluno("Eduardo","11111","7","8","6","9");
    $alunosTurma[] = $novoAluno1;
    $novoAluno2 = new Aluno();
    $novoAluno2->setAluno("Ricardo","22222","8","8","7","10");
    $alunosTurma[] = $novoAluno2;
    $novoAluno3 = new Aluno();
    $novoAluno3->setAluno("Danubia","33333","7","7","9","9");
    $alunosTurma[] = $novoAluno3;
    $novoAluno4 = new Aluno();
    $novoAluno4->setAluno("Leticia","44444","9","9","6","8");
    $alunosTurma[] = $novoAluno4;
    $novoAluno5 = new Aluno();
    $novoAluno5->setAluno("Gustavo","55555","8","8","8","10");
    $alunosTurma[] = $novoAluno5;
    $novoAluno6 = new Aluno();
    $novoAluno6->setAluno("Astolfo","66666","9","6","6","7");
    $alunosTurma[] = $novoAluno6;

    $novaTurma = new Turma("001 - A");
    for($i=0; $i < count($alunosTurma); $i++) {
        if ($novaTurma->matriculaAluno($alunosTurma[$i])){
            echo "<font color='green'>O aluno <b>" . $alunosTurma[$i]->getNome() . "</b> inserido com sucesso na turma. </font><br>";
        } else {
            echo "<font color='red'> Erro - Turma lotada!</font><br>"; 
        }
    }
    echo "<h1> CONTROLE DE NOTAS DA TURMA </h1>";
    echo "<h2> Notas dos alunos da Turma ". $novaTurma->getNomeTurma() . "</h2>";
    echo ">> Média da Turma: " . $novaTurma->mediaTurma(). "<br>";
    
    $alunosTurma = array();
    $alunosTurma = $novaTurma->getAlunos();
    for ($i=0; $i < count($alunosTurma);$i++){ 
        echo "<font size=5 face='Courier New'> >>" . $alunosTurma[$i]->getNome() . "</font><br>";
        echo "<table border=1><tr><th>Nota 1</th><th>Nota 2</th><th>Nota 3</th><th>Nota 4</th><th>Média</th></tr><tr>";
        $notasAluno = array();
        $notasAluno = $alunosTurma[$i]->getNotas();
        for ($c=0; $c < count($notasAluno); $c++){
            echo "<td align='center'>" . $notasAluno[$c] . "</td>";            
        }
        echo "<td align='center'>" . $alunosTurma[$i]->getMedia() . "</td></tr></table>";
    }

?>