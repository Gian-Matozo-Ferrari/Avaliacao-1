@extends('site.master.layout')

@section('content')
<div class="container">
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
          <h1>Azimut 77S.</h1>
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
          <h1>Flybridge 83.</h1>
          <p>A Ciência do Luxo </p>
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
      <h2 class="featurette-heading">Informações Técnicas. <span class="text-muted">Flybridge 83.</span></h2>
      <tbody>
      <p class="lead"><table>
        <tr><td>Comprimento total (incl. mesa de comandos)</td><td>25.2 m (82’ 8”)</td>
        </tr><tr><td>Comprimento do casco</td><td>23.71 m (77’ 9”)</td></tr>
        <tr><td>Boca máxima</td><td>6.18 m (20’ 3”)</td></tr>
        <tr><td>Imersão (incl. hélice, com carga total)</td><td>1.72 m (5’ 8”)</td></tr>
        <tr><td>Deslocamento (com carga total)</td><td>64 t</td></tr>
      </table>
      </p>
    </tbody>
    </div>
    <div class="col-md-5">
      <img src="{{ asset('images/popa77S.jpg') }}" width="500" height="500"/>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Informaçõoes Técnicas. <span class="text-muted">77S Collection.</span></h2>
      <tbody>
      <p class="lead">
        <table>
          <tr><td>Comprimento total (incl. mesa de comandos)</td><td>23,6 m (77' 5'')</td></tr>
          <tr><td>Comprimento do casco</td><td>23,54 m (77' 2'')</td></tr>
          <tr><td>Boca máxima</td><td>5,55 m (18' 3'')</td></tr>
          <tr><td>Imersão (incl. hélice, com carga total)</td><td>1.64 m (5' 5'')</td></tr>
          <tr><td>Deslocamento (com carga total)</td><td>58 t</td></tr>
        </table>
      </p>
    </tbody>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="{{ asset('images/proa77S.jpg') }}" width="400" height="400" />

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Informações Técnicas. <span class="text-muted">Grande 35 Metri.</span></h2>
      <tbody>
      <p class="lead">
        <table>
          <tr><td>Comprimento total (incl. mesa de comandos)</td><td>35,00 m</td></tr>
          <tr><td>Boca máxima</td><td>7,50 m</td></tr>
          <tr><td>Imersão (incl. hélice, com carga total)</td><td>1,91 m approx</td></tr>
          <tr><td>Deslocamento (com carga total)</td><td>154 t approx</td></tr>
        </table>
      </p>
    </tbody>
    </div>
    <div class="col-md-5">
      <img src="{{ asset('images/traseira77S.jpg') }}" width="500" height="500" />

    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

@endsection