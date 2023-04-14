<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
     <h1 class="titulo">Tarefas📃</h1>
    <table class="table table-dark">
        <tr>
            <th>Nome da Tarefa</th>
            <th>Data da Tarefa</th>
            <th>Situação da Tarefa</th>
        </tr>
        <?php
        $conexao = mysqli_connect("localhost", "root", "", "contatos");

        $sqlBusca = "select * from tarefas";
        $todasAsPessoas = mysqli_query($conexao, $sqlBusca);

        while ($umaPessoa = mysqli_fetch_assoc($todasAsPessoas)) {
            echo "<tr>";
            echo "<td>" . $umaPessoa["nome_tarefa"] . "</td>";
            echo "<td>" . $umaPessoa["data_tarefa"] . "</td>";
            echo "<td>" . $umaPessoa["situacao_tarefa"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"></script>
</body>

</html>