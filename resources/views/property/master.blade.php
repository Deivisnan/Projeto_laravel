<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>laradev: crud imobi</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link  rel="stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">

        <a href="#" class="navbar-brand">Lara<b>Dev</b></a>
    <ul class="navbar-nav ml-auto" >

        <li class="nav-item"><a href="<?= url('/imoveis'); ?>"class="nav-link">listar todos os imóveis</a></li>
        <li class="nav-item"><a href="<?= url('/imoveis/novo'); ?>" class="nav-link"> cadastrar novo imóvel</a></li>
    </ul>
    </div>
</nav>

@yield('content')


<script src="<?= asset('js/app.js');?>"> </script>
</body>
</html>
