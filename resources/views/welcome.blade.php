@extends('layouts.main')

@section('title','EventsMI')

@section('content')

<div class="container">

   {{-- <img src="/img/banner.jpg" alt="Banner"> --}}
   <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <h1 style="text-align: center">Bem-vindo ao EventMI</h1>
            {{-- trocar ids carousel --}}
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active" >
            <img src="/img/tg.jpg" alt="events" class="d-block" style="width: 951px;height: 531px;">
            <div class="carousel-caption">
                <h3>Evento de animes</h3>
                <p>Evento para todos os Otakus e amantes da cultura geek</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/img/event_placeholder.jpg" alt="events" class="d-block" style="width: 951px;height: 531px;">
            <div class="carousel-caption">
                <h3>Evento e palestras</h3>
                <p>Evento de palestra para amenta o seu conhecimento</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="/img/banner.jpg" alt="events" class="d-block" style="width: 951px;height: 531px;">
            <div class="carousel-caption">
                <h3>Evento sbre finanças</h3>
                <p>Evento para melhorar sua vida financeira com conhecimento</p>
            </div>
            </div>
        </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if ($search)

    <h2 style="color: #f5b84d">Bucando por:{{$search}}</h2>

    @else

    <h2>Proximos eventos</h2><br>

    @endif
    <p class="subtitle">Veja os proximos eventos</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}} " alt="{{ $event->title}}">
            <div class="card-body">
                <p class="card-date" style="color: #000000;">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5 class="card-title">{{ $event->title}}</h5>
                <p class="card-participants">X participantes</p>
                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if (count($events) == 0 && $search)
        <p style="color: #f5b84d">Não foi possivel encontrar eventos com {{$search}} <a href="/">Ver todos</p>
        @elseif (count($events) == 0)
        <p style="color: #f5b84d">Não há evento disponíveis</p>
        @endif
    </div>
</div>
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
//       $('.carousel').carousel({
//   interval: 2000
// });
</script>
   @endsection
