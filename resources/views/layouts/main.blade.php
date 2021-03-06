<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


      <link rel="stylesheet" href="/css/style.css">

      <script href="/js/script.js"></script>




    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" id="img_logo" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastar</a>
                        </li>

                    </ul>
            </nav>

        </header>


        @yield('content')
 <footer>
        <p>HDC Events &copy; 2022</p>
    </footer>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    </body>

</html>
