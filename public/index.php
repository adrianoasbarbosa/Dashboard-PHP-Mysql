<?php
date_default_timezone_set('America/Sao_Paulo');
include_once '../app/helpers/lock.php'; // Inclui o arquivo de bloqueio
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once '../app/helpers/header.php'; // Inclui o cabeçalho 
    ?>
</head>

<body>
    <?php include_once '../app/helpers/navbar.php'; // Inclui a barra de navegação 
    ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 col-sm-12">
                <?php
                $pagina = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_STRING);

                if (empty($pagina) || $pagina === 'index') {
                    include_once '../app/views/admin/Home/home.php'; // Inclui a página inicial
                } else {
                    // Sanitiza e inclui a página especificada
                    $paginaSanitizada = htmlspecialchars($pagina);
                    $arquivo = '../app/views/' . $paginaSanitizada . '.php'; // Caminho relativo

                    if (file_exists($arquivo)) {
                        include_once $arquivo;
                    } else {
                ?>
                        <div class="alert alert-danger" role="alert">
                            Erro 404, página não encontrada!
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php include_once '../app/helpers/plugins.php'; // Inclui plugins ou scripts necessários 
    ?>
</body>

</html>