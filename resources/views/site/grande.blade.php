@extends('site.master.layout')

@section('content')
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
@endsection