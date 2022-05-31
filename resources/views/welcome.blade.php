@extends('layouts.main')

@section('title','HDC Events')

@section('content')

   <h1>Bem-vindo ao EventMI</h1>
   {{-- <img src="/img/banner.jpg" alt="Banner"> --}}
   <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/tg.jpg" alt="Los Angeles" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Evento</h3>
        <p>Evento teste</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/event_placeholder.jpg" alt="Chicago" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Evento</h3>
        <p>Evento teste</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/banner.jpg" alt="New York" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Evento</h3>
        <p>Evento teste</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p class="subtitle">Veja os proximos eventos</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/banner.jpg" alt="{{ $event->title}}">
            <div class="card-body">
                <p class="card-date">10/09/2022</p>
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

   {{-- <table style=" width:709; border:1 ;cellspacing:0;cellpadding:3 ">
    <tr>
        <td class="{{(!empty($events)) ? 'tipo' : 'not_sorting'; }}">id</td>
        <td class="{{ (!empty($events)) ? 'title' : 'not_sorting';}} ">title</td>
        <td class="{{ (!empty($events)) ? 'desciption' : 'not_sorting';}} ">descrição</td>
        <td style="width:167 align:center"><strong>Opções</strong></td>
    </tr> --}}

      {{-- <tr> --}}
        {{-- <td>{{ $events['id'] }}</td>
        <td>{{ $events['title'] }}</td>
        <td>{{ $events['description'] }}</td>--}}


      {{-- </tr>

  </table> --}}
  <script>
      $('.carousel').carousel({
  interval: 2000
})
</script>
   @endsection
