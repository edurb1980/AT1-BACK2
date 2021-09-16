<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas da Turma</title>
    </head>
    <body>
        <?php
            require_once('model/Aluno.php');
            require_once('model/Turma.php');

            // 2.1. Instanciar 5 objetos para a classe aluno, e por meio de um método adicionar os valores para cada objeto (...)
            $novoAluno1 = new Aluno();
            $novoAluno1->setAluno("Eduardo","11111","7","8","6","9");
            $novoAluno2 = new Aluno();
            $novoAluno2->setAluno("Ricardo","22222","8","8","7","10");
            $novoAluno3 = new Aluno();
            $novoAluno3->setAluno("Danubia","33333","7","7","9","9");
            $novoAluno4 = new Aluno();
            $novoAluno4->setAluno("Leticia","44444","9","9","6","8");
            $novoAluno5 = new Aluno();
            $novoAluno5->setAluno("Gustavo","55555","8","8","8","10");
            // (instanciei 6 para gerar o erro em tela, conforme exemplo da atividade)
            $novoAluno6 = new Aluno();
            $novoAluno6->setAluno("Astolfo","66666","9","6","6","7");
            // 2.1. (...) e depois inserir o objetos em um array de alunos.
            $alunosTurma = array();
            $alunosTurma = [$novoAluno1, $novoAluno2, $novoAluno3, $novoAluno4, $novoAluno5, $novoAluno6];

            $novaTurma = new Turma("001 - A"); // 2.2. Instanciar a classe Turma(...)
            for($i=0; $i < count($alunosTurma); $i++) {
                // 2.2. (...) e adicionar os objetos de alunos que estão no array alunos.
                if ($novaTurma->addAluno($alunosTurma[$i])){   // 2.2. (...) Neste ponto deve-se validar se já foi cadastrado 5 alunos e imprimir o sucesso ou o erro ao inserir o aluno na turma.
                    echo "<font color='green'>O aluno <b>" . $alunosTurma[$i]->getNome() . "</b> inserido com sucesso na turma. </font><br>";
                } else {
                    echo "<font color='red'> Erro - Turma lotada!</font><br>"; 
                }
            }
            echo "<h1> CONTROLE DE NOTAS DA TURMA </h1>";
            // 2.3. Por fim, imprimir na tela: O nome da Turma, 
            echo "<h2> Notas dos alunos da Turma ". $novaTurma->getNomeTurma() . "</h2>";
            // 2.3. (...) a média da Turma, 
            echo ">> Média da Turma: " . $novaTurma->mediaTurma(). "<br>";
            
            $alunosTurma = array();
            $alunosTurma = $novaTurma->getAlunos();
            // 2.3. (...) e a lista de alunos com suas respectivas notas e médias.
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
    </body>
</html>