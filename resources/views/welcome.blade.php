<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/Icono.ico" type="image/x-icon">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/css/uikit.min.css" />
<link rel="stylesheet" href=".css/estilo.css">
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.10/dist/js/uikit-icons.min.js"></script>
        <title>AgroCafeNic</title>
    </head>
<body>
   @include('layouts.navbar')

        <!-- Aqui el modal del primer sitio -->
        <div class="uk-padding-center uk-background-muted uk-width-1-2@s-center">
        <h2>Beneficio Humedo</h2>
        <img class="uk-align-left uk-margin-remove-adjacent" src="img/Logo.jpeg" width="225" height="250" alt="Cafe en grano">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, voluptatibus voluptate? Ipsam vero quas iste aliquid, ea sapiente, et ipsum perferendis esse repudiandae architecto dolorum illo exercitationem veniam aut. Illum!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eius aspernatur quis temporibus. Officia debitis pariatur eaque ea eum ducimus, iusto, in expedita quod quos, nostrum accusantium optio. Omnis, sint.</p>
    <a class="uk-button uk-button-primary" href="#modal-full" uk-toggle>Leer mas</a>
    </div>
</body>
<footer>

</footer>
</html>
