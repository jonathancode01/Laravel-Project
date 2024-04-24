<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <title>@yield('Title')</title>
        <!--Font do Google-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Boostrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--CSS da aplicação-->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    
     
    </head>
    <body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/prime.png" alt="HDC Events">
                </a>
                <div >
                <h1  style = "padding-left: 70%;
                font-size: 2.5rem;
                display: grid;
                justify-content: center;
                margin-bottom: -1.5rem;" >Prime Eventos</h1>
                </div>
                <ul class="navbar-nav" style="font-size: 140%;">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Minha conta</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" 
                            class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair
                            </a>
                        </form>
                    </li>
                    @endauth


                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
        <main>
            <div class="container fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
      <footer>
      <p>HDC Events &copy; 2020</p>
      </footer>
        


      <!-- icones -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
