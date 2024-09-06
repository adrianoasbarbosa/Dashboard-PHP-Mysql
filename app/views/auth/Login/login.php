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
                    <input type="submit" name="btnlogar" value="Entrar">
                </div>
            </form>

        </div>

    </div>

</body>

</html>

<?php
if (isset($_POST['btnlogar'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    include_once '../../../class/Usuario.php';
    $user = new Usuario();

    $user->setEmail(trim($email));
    $user->setSenha(trim($senha));

    if (count($user->consultar()) <= 0) {
        echo '<div class="col-sm-12 col-md-12">'
            . '<div class="alert alert-danger" role="alert">'
            . '<h3>E-mail e/ou senha incorreta(s)</h3>'
            . '<p>Verifique seu email e senha!</p>'
            . '</div>'
            . '</div>';
    } else {
        session_start();
        $_SESSION['acesso'] = 'b8d66a4634503dcf530ce1b3704ca5dfae3d34bb';

        header("Location: index.php");
        exit();
    }
}
?>