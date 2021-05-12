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

        <div class="cabecalho">
            <h1>Cadastre seu Anúncio</h1>

            <p> Preencha os campos abaixo com dados pessoais e dados do anúcio.<br>
                Após o prenchimento você receberá informações sobre o investimento do anúncio.</p><br>
        </div>

        <div>
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
                <h1>Cadastro de Usuários</h1>
                <hr>

                <form method="post" action="processa.php">
                    <div class="div">
                    <h2>Dados Pessoais</h2>
                    </div>

                    <label>Nome:</label>
                    <input type="text" name="nome" class="campo" maxlength="100" require autofocus style="margin-left: 25px;"><br>

                    <label>E-mail:</label>
                    <input type="email" name="email" class="campo" maxlength="50" style="margin-left: 25px;"><br>

                    <label>Telefone:</label>
                    <input type="tel" name="telefone" class="campo" maxlength="15" style="margin-left: 10px;"><br><br>

                    <div class="div"> 
                    <h3>Dados do Anúncio</h3>
                    </div>

                    <label>Anúncio:</label>
                    <input type="text" name="anuncio" class="campo" maxlength="200" require style="margin-left: 10px;"><br><br>

                    
                    <h5>Por quantos dias quer anunciar?:</h5>
                    

                    <label>Data de Início:</label>
                    <input type="date" name="datein" class="campo" style="margin-left: 28px;"><br>

                    <label>Data de Término:</label>
                    <input type="date" name="dateout" class="campo" style="margin-left: 10px"><br>

                    <label>Valor R$:</label>
                    <input type="number" name="valor" class="campo" style="margin-left: 10px"><br>

                    <input type="submit" value="Salvar" class="btn">
                </form>

            </section>

        </div>
       
    </div>
   

</body>

</html>