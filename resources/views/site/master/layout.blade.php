<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avaliação 1 Programação WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/projetos/Projeto-Av1/public/style.css">
</head>
<body>
    >
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('site.home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.flybridge') }}">FlyBridge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.grande') }}">Grande</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('site.azimuts') }}">S Collection</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    <main role="main">

        @yield('content')

      <!-- FOOTER Fiz um date no footer dinamico-->
      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; <?= date('Y') ?> Programação WEB Company, Inc. &middot;<a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.8.3/umd/popper.min.js" integrity="sha512-4dvO5Z/pIXt0GRvvrgYNjb+ihLc2thByw1vVsP8AbHh4GNaYatYqAUJVDqFvxCP3FTkzqnqloRa10UVtxkb5sQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>