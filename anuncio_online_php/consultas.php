<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from cad_anuncio where nome like'%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Style/style.css">

    <title>Cadastro de Anúncios</title>
</head>

<body>

    <div class="container" style="margin-top: 60px;">

        <nav>
            <ul class="menu">
                <a href="index.php">
                    <li>Cadastro</li>
                </a>
                <a href="consultas.php">
                    <li>Consultas</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr>

            <form action="" method="get">
                <label>Filtro por nome:
                </label>
                <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="pesquisar" class="btn"><br><br>
            </form>

            <?php

            print "$registros registros encontrados.<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                $id = $exibirRegistros[0];
                $nome = $exibirRegistros[1];
                $email = $exibirRegistros[2];
                $telefone = $exibirRegistros[3];
                $anuncio = $exibirRegistros[4];
                $datein = $exibirRegistros[5];
                $dateout = $exibirRegistros[6];
                $valor = $exibirRegistros[7];
                $total = $exibirRegistros[8];

                print "<article>";

                print "<strong>Nome:</strong> $nome<br>";
                print "<strong>E-mail:</strong> $email<br>";
                print "<strong>Tel:</strong> $telefone<br>";
                print "<strong>Anúncio:</strong> $anuncio<br>";
                print "<strong>A partir de:</strong> $datein <strong>até:</strong> $dateout<br>";
                print "<strong>Projeção:</strong> Com o investimento de R$$valor o anúcio terá um total aproximado de <strong>$total</strong> visualizações!";

                print "</article>";
            }

            mysqli_close($conexao);
            ?>   
        </section>
    </div>
    <footer>
            <div class="footer">
                <h5>Desenvolvido por:<br>Natan dos Santos Borges </h5>
            </div>
        </footer>
</body>

</html>