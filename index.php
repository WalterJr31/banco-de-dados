<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Cadastro de Contatos</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
        </tr>
        <?php
        $conexao = mysqli_connect("localhost","root","","contatos");

        $sqlBusca = "select * from pessoas";
        $todasAsPessoas = mysqli_query($conexao,$sqlBusca);

        while($umaPessoa = mysqli_fetch_assoc($todasAsPessoas)){
            echo "<tr>";
            echo "<td>" . $umaPessoa["Nome"] . "</td>";
            echo "<td>" . $umaPessoa["T
            elefone"] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
    </table>

</body>

</html>