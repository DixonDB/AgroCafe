<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit-icons.min.js"></script>
        <title>AgroCafeNic</title>
    </head>
<body>
<div class="relative flex items-top justify-right min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-right sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <nav class="uk-navbar-container" uk-navbar>

<div class="uk-navbar-left">
    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="#">Inicio</a></li>
        <li>
            <a href="#">Variedades</a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Variedad1</a></li>
                    <li class="uk-active"><a href="#">Variedad2</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#">Amenazas</a></li>
    </ul>
</div>
<div class="uk-navbar-right">
    <ul class="uk-navbar-nav">
        <li>
            <a href="#">Beneficio Humedo</a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#">Beneficio Seco</a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                </ul>
            </div>
        </li>
        <li class="uk-active"><a href="#">Acerca de</a></li>
    </ul>
</div>
</nav>
        <!-- Aqui el modal del primer sitio -->
        <div class="uk-padding uk-background-muted uk-width-1-2@s">
        <h2>Beneficio Humedo</h2>
        <img class="uk-align-left uk-margin-remove-adjacent" src="img/1.jpeg" width="225" height="150" alt="Cafe en grano">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis sit impedit
             deleniti, illum officia consectetur nihil cumque cupiditate eos quaerat
              illo nesciunt laboriosam eveniet reprehenderit, omnis laborum necessitatibus
               quisquam. Optio?</p>
    <a class="uk-button uk-button-primary" href="#modal-full" uk-toggle>Leer mas</a>

    </div>
</body>

</html>
