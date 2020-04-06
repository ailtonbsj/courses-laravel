<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/bootstrap-glyphicons.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Controle de Estoque</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/produtos/">Produtos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('conteudo')
    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020 ailtonbsj, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</body>

</html>
