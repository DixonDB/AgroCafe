<nav class="uk-navbar-container" uk-navbar>

<div class="uk-navbar-left">
    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="/">Inicio</a></li>
        <li>
            <a href="#">Variedades</a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-active"><a href="#">Variedad1</a></li>
                    <li class="uk-active"><a href="#">Variedad2</a></li>
                </ul>
            </div>
        </li>
        <li><a href="plagas">Plagas y Enfermdades</a></li>
    </ul>
</div>
<div class="uk-navbar-left">
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
<div class="uk-navbar-right"><div class="relative flex items-top justify-right min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-right sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    Sesion Iniciada
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                    <button class="uk-button uk-button-default"><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesion</a></button>
                        

                        @if (Route::has('register'))
                            <button class="uk-button uk-button-default"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrar</a></button>
                        @endif
                    @endauth
                </div>
            @endif
</div>
</nav>