<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="theme-light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>
        <title>Document</title>
        <link rel="stylesheet" href="./styles.css" type="text/css" />

      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


      <link rel="stylesheet" href="/css/style.css">

      <script href="/js/script.js"></script>




    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" id="img_logo" alt="HDC Events">
                    </a>
                    <div id="search-header-container" >
                         <form action="/" method="GET">
                         <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                         </form>
                    </div>
                    <!DOCTYPE html>


  <div class="container" style="background: var(--color-trans);">
    <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
    </label>
  </div>
  <script>

     // function to set a given theme/color-scheme
     function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }

        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();
  </script>

                    <ul class="navbar-nav">
                        <li>
                        </li>

                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>

                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                 onclick="event.preventDefault();
                                  this.closest('form').submit();">Sair</a>
                            </form>

                        </li>
                        @endauth
                        @guest

                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastar</a>
                        </li>
                        @endguest
                    </ul>
            </nav>

        </header>

 </body>
    <main>
        <div class="cotainer-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>EventsMI &copy; 2022</p>
    </footer>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>



</html>
