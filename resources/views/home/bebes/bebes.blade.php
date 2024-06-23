<link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_home.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_antibioticos.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="/img/logo_farmacia.png" />
<title>Bebes</title>
<div class="container col-md-10">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary text-white text-center">
                    <div class="container">
                        <img src="/img/Logo_Multifarma.png" class="img-fluid" width="210" height="210" alt="Nombre de la Marca"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse id="navbarsExample07">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/salud">Salud</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/salud/antibioticos">Antibióticos</a></li>
                                        <li><a href="/salud/dolor">Dolor</a></li>
                                        <li><a href="/salud/dermatologia">Dermatologia</a></li>
                                        <li><a href="/salud/saludsexual">Salud Sexual</li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/bebes">Bebes</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/bebes/pañales">Pañales</a></li>
                                        <li><a href="/bebes/formulas">Formulas Infantiles</a></li>
                                        <li><a href="/bebes/alimentos">Alimentos Infantiles</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/vitaminas">Vitaminas y Suplementos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/vitaminas/complementos">Complementos Alimenticios</a></li>
                                        <li><a href="/vitaminas/multivitaminas">Multivitaminas</a></li>
                                        <li><a href="/vitaminas/suplementos">Suplementos Alimenticios</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/departamentos">Departamentos</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/departamentos/alimentos">Alimentos</a></li>
                                        <li><a href="/departamentos/bebidas">Bebidas</a></li>
                                        <li><a href="/departamentos/higiene">Higiene y Belleza</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/carrito">Carrito de Compras
                                    <img src="/img/carrito.png" class="img-fluid" width="30" height="10" alt="Carrito"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/ayuda">Ayuda</a>
                                    <ul class="dropdown-content">
                                        <li><a href="/ayuda/contacto">Contactanos</a></li>
                                        <li><a href="/ayuda/preguntas">Preguntas Frecuentes</a></li>
                                        <!-- Agrega más elementos según sea necesario -->
                                    </ul>
                                </li>
                                
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <!-- Enlace existente para Dashboard -->

                                                <a class="dropdown-item" href="{{ route('dash2') }}">
                                                    {{ __('Dashboard') }}
                                                </a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                
                                            </div>
                                        </li>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <main class="main-content">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item"><a>Bebés</a></li>
                        </ol>
                    </nav>

                        
                    <body>
                        <h1>Bebés</h1>

                        <section id="anuncios">
                            <!-- Aquí puedes incluir tus anuncios publicitarios -->
                            <div class="productos-container">
                                <a class="nav-link" href="#"><img src="/img/bebes.png" alt="Anuncio 1"></a>
                            </div>
                        </section>

                        <h2>Encuentra las categorias de Bebés</h2>
                
                        <div class="container mt-5">
                            
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Primera tanda de imágenes -->
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <div>
                                            <a href="/bebes/pañales"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C3/D4C3.png" class="d-block mx-3" alt="Imagen 1"></a>
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Pañales</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/cuidado-del-bebe"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C1/D4C1.png" class="d-block mx-3" alt="Imagen 2">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Formulas Infantiles</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/alimentos"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C5/D4C5.png" class="d-block mx-3" alt="Imagen 3">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Alimentos para Bebe</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/toallitas"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C4W3/D4C4W3.png" class="d-block mx-3" alt="Imagen 4">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Toallitas Humedas</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/bebes/cuidado-del-bebe"><img src="https://www.movil.farmaciasguadalajara.com/wcsstore/FGCAS//wcs/images/content/site/banners_circulares/D4C4/D4C4.png" class="d-block mx-3" alt="Imagen 5">
                                            <div class="container">
                                                <a tabindex="-1" aria-hidden="true" class="product_group_name product_info" href="">Cuidado del Bebe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                                        
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                        


