<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mensagemErro = '';
$valorMaximoTabuada = 10;
$tabuada = null;
if (isset($_GET['tabuada'])) {
    $valorTabuadaInteiro = intval($_GET['tabuada']);
    if ($valorMaximoTabuada < $valorTabuadaInteiro) {
        $mensagemErro = 'O valor da tabuada não pode ser manipulado via GET e apenas no select';
    }

    $tabuada = $valorTabuadaInteiro;
    $valorMaximoTabuada += $tabuada;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="navbar bg-success fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tabuada do Pardin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contato">Entre em contato</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="multiplicacao.php">&#x2716 Multiplicação</a></li>
                                    <li><a class="dropdown-item" href="divisao.php">&#x2797 Divisão</a></li>
                                    <li><a class="dropdown-item" href="soma.php">&#x2795 Soma</a></li>
                                    <li><a class="dropdown-item" href="subtracao.php">&#x2796 Subtração</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="mb-5 text-center">
        <section>
            <img src="imagens/subtracao.png" class="d-block w-100" alt="imagem subtração">
        </section>

        <section class="container">
            <h1 class="mt-5">Tabuada da subtração</h1>
            <p>Digite um número para ver a tabuada da subtração com ele.</p>
        </section>

        <section class="container">
            <form action="" method="get">
                <select name="tabuada">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        echo sprintf(
                            '<option value="%d">%d</option>',
                            $i,
                            $i,
                        );
                    }
                    ?>
                </select>
                <button type="submit">Ver</button>
            </form>
    
            <div>
                <?php
                if ('' === $mensagemErro && null !== $tabuada && 0 !== $tabuada) {
                    for ($j = ($tabuada + 1); $j <= $valorMaximoTabuada; $j++) {
                        $resultado = $j - $tabuada;
    
                        echo sprintf('<span>%d - %d = %d</span> </br>', $j, $tabuada, $resultado);
                    }
                }
    
                if ('' !== $mensagemErro) {
                    echo '<span>' . $mensagemErro . '</span>';
                }
                ?>
            </div>
        </section>

        <section class="mt-5">
            <button type="button" class="btn btn-success"><a href="index.php" class="text-white">Voltar para página anterior</a></button>
        </section>
    </main>

    <footer id="contato" class="bg-success py-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-3">
                    <h2>Redes sociais</h2>
                    <ul class="list-inline d-flex justify-content-center gap-4">
                        <li class="list-inline-item">
                            <a class="text-white text-decoration-none" href="https://github.com/JP-Pardinho">
                                <i class="bi bi-github fs-4"></i>
                                <span class="d-none d-sm-inline">GitHub</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white text-decoration-none" href="https://www.instagram.com/jp.pardinho/"
                                target="_blank">
                                <i class="bi bi-instagram fs-4"></i>
                                <span class="d-none d-sm-inline">Instagram</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white text-decoration-none" href="https://www.linkedin.com/in/jppardinho/">
                                <i class="bi bi-linkedin fs-4"></i>
                                <span class="d-none d-sm-inline">LinkedIn</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-12">
                    <p>
                        Site criado por <a href="https://github.com/JP-Pardinho" target="_blank" class="text-white">
                            JP-Pardinho</a> para o curso MS-Code.
                    </p>
                    <p>©2025 Loja do Pardin. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>