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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FlyBridge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Grande</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">S Collection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Representante</a>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    
    <main>
    
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
            <img src="{{ asset('images/Grande35.jpg') }}" />
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Grande 35 Metri.</h1>
                <p>Sem meias Medidas.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Fazer Orçamento</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
            <img src="{{ asset('images/77S.jpg') }}" />
            <div class="container">
              <div class="carousel-caption">
                <h1>Azimut S Collection</h1>
                <p>Esportividade e tecnologia são os dois concepts de projeto ao redor dos quais nascerem os iates da Coleção S.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Fazer Orçamento</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>
            <img src="{{ asset('images/Flybridge83.jpg') }}" />
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Flybridge Collection.</h1>
                <p>A Ciência do Luxo</p>
                <p><a class="btn btn-lg btn-primary" href="#">Fazer Orçamento</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
      <div class="container marketing">
    
    <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>S Collection</h2>
            <p>Esportividade e tecnologia são os dois concepts de projeto ao redor dos quais nascerem os iates da Coleção S.
              Modelos que incentivam e favorecem o prazer da vida ao ar livre através de hard top de abrir e soluções hi-tech
              pensadas para conjugar a exigência de funcionalidade com a atenção ao aspecto estético. Uma mistura equilibrada
              de conforto, prazer de condução e luxo inesperados dentro do mundo dos iates esportivos. O mar, nos rastros da
              emoção do estilo Made in Italy.
            </p>
            <p><a class="btn btn-secondary" href="#">Ver Detalhes</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>Grande Collection</h2>
            <p>Grande em termos de espaço generoso, no conforto, no nível de serviço e na abundância de elegância. 
              A coleção Azimut Grande tem tudo o que um proprietário poderia pedir de um carro-chefe e oferece um equilíbrio perfeito 
              entre o fascínio do estilo italiano e os conceitos de design voltados para a criação de excelência.


            </p>
            <p><a class="btn btn-secondary" href="#">Ver Detalhes</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
    
            <h2>FlyBridge Collection</h2>
            <p>Agilidade, potência, elegância, escolha. A Coleção Frybridge de Azimut oferece a mais ampla gama no mundo, com modelos que vão dos 42 aos 100 pés,
               cada um com um conceito de realização caracterizador, cada um com uma versatilidade que permite ao Armador a personalização dos ambientes graças à escolha 
               dos tecidos, dos couros, das essências de madeira. 
               Modelos diferentes mas com um denominador comum: a requintada elegância do Design Italiano. Invenções habitacionais que tornam cada cabine uma suíte, materiais 
               prestigiosos que evidenciam o charme dos interiores, amplas janelas que criam um contato contínuo com o ambiente externo. Coleção Flybridge, o mar, com estilo.
            </p>
            <p><a class="btn btn-secondary" href="#">Ver Detalhes</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    
    
    <!-- START THE FEATURETTES --> 
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('images/popa77S.jpg') }}" width="500" height="500"/>
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/proa77S.jpg') }}" width="400" height="400" />
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('images/traseira77S.jpg') }}" width="500" height="500" />
    
          </div>
        </div>
    
        <hr class="featurette-divider">
    
        <!-- /END THE FEATURETTES -->
    
      </div><!-- /.container -->
    
    
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