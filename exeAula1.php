
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "./inc/Config.inc.php";

        $aluno1 = new Aluno("Pedro",23,90);
        $aluno2 = new AlunoTurma("Beijamim",12,75,501,"Quinta Série");
        $aluno3 = new AlunoPagamento("Marcela",17,80,1000,"sim");


        $aluno1->verAluno();
        $aluno2->verAlunoTurma();
        $aluno3->verAlunoPagamento();
    ?>
</body>
</html>