<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    
    <title>Document</title>
</head>

<body>

    <header>
        <h1>FRIENDSHIPLOVE</h1>
        <p>Encuentra el amor y la amistad en la misma página</p>
    </header>

    <!-- Contenido de la página -->
    
    @section('sidebar')
    @show

    <div class="container">
        @yield('content')
    </div>


    <footer>
        <div class="social-media">
            <img src="images/instagram.png" alt="Instagram">
            <span>@nombredeusuario1</span>
        </div>
        <div class="social-media">
            <img src="images/facebook.png" alt="Facebook">
            <span>@nombredeusuario2</span>
        </div>
        <div class="social-media">
            <img src="images/twitter.png" alt="Twitter">
            <span>@nombredeusuario3</span>
        </div>
        <div class="social-media">
            <img src="images/youtube.png" alt="YouTube">
            <span>@nombredeusuario4</span>
        </div>
    </footer>


</body>

</html>