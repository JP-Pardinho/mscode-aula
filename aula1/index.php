<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
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
                                <a class="nav-link active" aria-current="page" href="#">Início</a>
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

    <main class="mt-5 mb-5">
        <section>
            <div id="carouselAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/soma.png" class="d-block w-100" alt="Banner soma">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/subtracao.png" class="d-block w-100" alt="Banner subtração">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/multiplicacao.png" class="d-block w-100" alt="Banner multiplicação">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/divisao.png" class="d-block w-100" alt="Banner divisão">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section id="operacoes" class="container mt-5 text-center">
            <h1 class="mt-5 mb-5">Operações</h1>
            <div class="row gap-3 justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="imagens/cardSoma.png" class="card-img-top" alt="Icone soma">
                    <div class="card-body">
                        <h5 class="card-title">Soma &#x2795</h5>
                        <p class="card-text">Bora praticar? Clique em Calcular, escolha um número e descubra como essa operação funciona com vários valores!</p>
                        <a href="soma.php" class="btn btn-primary">Calcular</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagens/cardSubt.png" class="card-img-top" alt="Icone subtração">
                    <div class="card-body">
                        <h5 class="card-title">Subtração &#x2796</h5>
                        <p class="card-text">Bora praticar? Clique em Calcular, escolha um número e descubra como essa operação funciona com vários valores!</p>
                        <a href="subtracao.php" class="btn btn-primary">Calcular</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagens/cardDiv.png" class="card-img-top" alt="Icone divisão">
                    <div class="card-body">
                        <h5 class="card-title">Divisão &#x2797</h5>
                        <p class="card-text">Bora praticar? Clique em Calcular, escolha um número e descubra como essa operação funciona com vários valores!</p>
                        <a href="divisao.php" class="btn btn-primary">Calcular</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="imagens/cardMult.png" class="card-img-top" alt="Icone multiplicação">
                    <div class="card-body">
                        <h5 class="card-title">Multiplicação &#x2716</h5>
                        <p class="card-text">Bora praticar? Clique em Calcular, escolha um número e descubra como essa operação funciona com vários valores!</p>
                        <a href="multiplicacao.php" class="btn btn-primary">Calcular</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="contato" class="bg-success py-4 mt-5">
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
                    <p>Site criado por <a href="https://github.com/JP-Pardinho" target="_blank" class="text-white">
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