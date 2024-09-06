<?php
// Inclua qualquer configuração ou inicialização necessária aqui
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../public/assets/css/login.css">
    <title>Login</title>
</head>

<body id="principal">

    <div id="login">

        <div class="caixa">

            <h1>LOGIN</h1>

            <form action="" method="POST">
                <div class="email">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="senha">
                    <input type="password" name="password" placeholder="Senha" required>
                </div>

                <div class="entrar">
                    <p>Ainda não tem uma conta? <a href="../Register/register.php">Crie uma.</a></p>
                    <input type="submit" value="Entrar">
                </div>
            </form>

        </div>

    </div>

</body>

</html>