<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$anuncio = $_POST['anuncio'];
$datein = $_POST['datein'];
$dateout = $_POST['dateout'];
$valor = $_POST['valor'];
$total = $_POST['TOTAL'];

$sql = "insert into cad_anuncio (nome,email,telefone,anuncio,datein,dateout,valor,total) values ('$nome','$email','$telefone','$anuncio','$datein','$dateout','$valor','$total')";


$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);
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

    <div class="container">

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
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php
            if($linhas == 1){
                print "Cadasto efetuado com sucesso!";  
            }else{
                print "Cadastro não efetuado!<br>
                EMAIL já cadastrado.";
            }
            ?>    
        </section>

    </div>

</body>

</html>