@extends('layouts.main')

@section('title','HDC Events')

@section('content')

   <h1>Hello World Laravel</h1>
   <img src="/hdcevents/public/img/banner.jpg" alt="Banner">



   <table width="709" border="1" cellspacing="0" cellpadding="3">
    <tr>
        <td class="<?= (!empty($events)) ? 'tipo' : 'not_sorting'; ?>">id</td>
        <td class="<?= (!empty($events)) ? 'title' : 'not_sorting'; ?>">title</td>
        <td class="<?= (!empty($events)) ? 'desciption' : 'not_sorting'; ?>">descri</td>
        <td width="167" align="center"><strong>Opções</strong></td>
    </tr>

      <tr>
        <td>{{ $events['id'] }}</td>
        <td>{{ $events['title'] }}</td>
        <td>{{ $events['description'] }}</td>


      </tr>

  </table>
   @endsection
