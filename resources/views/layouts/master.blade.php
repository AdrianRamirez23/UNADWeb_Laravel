<!DOCTYPE html>

<html lang="es">
<head runat="server">

     <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
    <title>UNAD - Universidad Nacional Abierta a Distancia</title>
    <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>
<body>
     <div class="preloader">
            <div class="loader rubix-cube">
                <div class="layer layer-1"></div>
                <div class="layer layer-2"></div>
                <div class="layer layer-3 color-1"></div>
                <div class="layer layer-4"></div>
                <div class="layer layer-5"></div>
                <div class="layer layer-6"></div>
                <div class="layer layer-7"></div>
                <div class="layer layer-8"></div>
            </div>
        </div>
        <header id="header-part">

<div class="header-top d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="header-contact text-lg-left text-center">
                    <ul>
                        <li>
                            <img src="images/all-icon/map.png" alt="icon"><span>Medellín, Colombia</span></li>
                        <li>
                            <img src="images/all-icon/email.png" alt="icon"><span>info@unad.edu.com</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="header-opening-time text-lg-right text-center">
                    <p>Horas de Atención : Lunes a Sábado - 8 Am a 5 Pm</p>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- header top -->

<div class="header-logo-support pt-30 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="logo">
                    <a href="{{url('')}}">
                        <img src="images/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="support-button float-right d-none d-md-block">
                    <div class="support float-left">
                        <div class="icon">
                            <img src="images/all-icon/support.png" alt="icon">
                        </div>
                        <div class="cont">
                            <p>Número de Atención</p>
                            <span>321 325 5678</span>
                        </div>
                    </div>
                    <div class="button float-left">
                        <a href="#" class="main-btn">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- header logo support -->

<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="active" href="{{ url('')}}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('about')}}">Acerca de Nosotros</a>
                            </li>   
                            <li class="nav-item">
                                <a href="{{url('new')}}">Noticias y Eventos</a>
                               
                            </li>
                            <li class="nav-item">
                                <a href="#">Estudiantes</a>
                                <ul class="sub-menu">
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">Iniciar Sesión</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">Registarse</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">Docentes</a>
                                <ul class="sub-menu">
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">Iniciar Sesión</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- nav -->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                <div class="right-icon text-right">
                    <ul>
                        <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- right icon -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>

</header>

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
<div class="serach-form">
<div class="closebtn">
    <span></span>
    <span></span>
   
</div>
     <asp:TextBox ID="TextBox1" PlaceHolder="Buscar" TextMode="Search" runat="server"></asp:TextBox>
</div> <!-- serach form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog category-form">
    <div class="modal-content ">
        <div class="modal-header form-title text-center" ¿>
            <h3 style="color:#ffc600;margin-left:20%">Iniciar Sesión</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <div class="main-form">
                    <div class="singel-form">
                        <input type="text" placeholder="Nombres Completos">
                    </div>
                    <div class="singel-form">
                        <input type="email" placeholder="Correo Electrónico">
                    </div>
                    <div class="singel-form">
                        <input type="text" placeholder="Número de Contacto">
                    </div>
                    <div class="singel-form">
                        <asp:LinkButton ID="LinkButton1" runat="server">Recordar Contraseña</asp:LinkButton>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="main-btn" data-dismiss="modal">Cancelar</button>
            <button type="button" class="main-btn">Entrar</button>
        </div>
    </div>
</div>
</div>


<!--====== SLIDER PART START ======-->

<section id="slider-part" class="slider-active">
<div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-1.jpg)" data-overlay="4">
<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
                <h1 data-animation="bounceInLeft" data-delay="1s">Escoje la carrera que mas deseas</h1>
                <p data-animation="fadeInUp" data-delay="1.3s">Nuestros programas son 100% Certificados por el Ministerio de Educacón.</p>
                <ul>
                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{url('about')}}">Leer Mas</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#" data-toggle="modal" data-target="#exampleModal">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</div> <!-- single slider -->

<div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-2.jpg)" data-overlay="4">
<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
                <h1 data-animation="bounceInLeft" data-delay="1s">Programas 100% Virtuales</h1>
                <p data-animation="fadeInUp" data-delay="1.3s">Estudia desde la comodidad de tu casa y prepárate para el mundo laboral.</p>
                <ul>
                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{url('about')}}">Leer Mas</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#" data-toggle="modal" data-target="#exampleModal">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</div> <!-- single slider -->

<div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/s-3.jpg)" data-overlay="4">
<div class="container">
    <div class="row">
        <div class="col-xl-7 col-lg-9">
            <div class="slider-cont">
                <h1 data-animation="bounceInLeft" data-delay="1s">Reconocidos por el Icetex</h1>
                <p data-animation="fadeInUp" data-delay="1.3s">No hay excusa para no estudiar, los principales fondos de financiamiento del país nos reconoce.</p>
                <ul>
                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{url('about')}}">Leer Mas</a></li>
                    <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#" data-toggle="modal" data-target="#exampleModal">Registrarse</a></li>
                </ul>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
</div> <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->

<section id="category-part">
<div class="container">
<div class="category pt-40 pb-80">
    <div class="row">
        <div class="col-lg-4">
            <div class="category-text pt-40">
                <h2>La Plataforma Educativa con gran variedad de Carreras</h2>
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
            <div class="row category-slied mt-40">
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-1">
                            <span class="icon">
                                <img src="images/all-icon/ctg-1.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>Idiomas</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-2">
                            <span class="icon">
                                <img src="images/all-icon/ctg-2.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>Contabilidad</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-3">
                            <span class="icon">
                                <img src="images/all-icon/ctg-3.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>LIcenciaturas</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-1">
                            <span class="icon">
                                <img src="images/all-icon/ctg-1.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>Sistemas</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-2">
                            <span class="icon">
                                <img src="images/all-icon/ctg-2.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>Negocios</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <span class="singel-category text-center color-3">
                            <span class="icon">
                                <img src="images/all-icon/ctg-3.png" alt="Icon">
                            </span>
                            <span class="cont">
                                <span>Ciencias Básicas</span>
                            </span>
                        </span> <!-- singel category -->
                    </a>
                </div>
            </div> <!-- category slied -->
        </div>
    </div> <!-- row -->
</div> <!-- category -->
</div> <!-- container -->
 
  @yield('content')
  <hr/>

</section>
<footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo" style="max-width:38%">
                                <a href="#"><img src="images/logo-2.png"  alt="Logo"></a>
                            </div>
                            <p>Mediante Resolución 3988 del 18 de abril de 2012, UNAD recibe Alta Acreditación por parte del Ministerio de Educación Nacional para cinco programas: Comunicación Social, Licenciatura en Etnoeducación, Zootecnia, Ingeniería de Sistemas de la Escuela y Administración de Empresas.</p>
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="{{url('')}}"><i class="fa fa-angle-right"></i>Inicio</a></li>
                                <li><a href="{{url('about')}}"><i class="fa fa-angle-right"></i>Acerca de Nosotros</a></li>
                                <li><a href="{{url('new')}}"><i class="fa fa-angle-right"></i>Noticias y Eventos</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-angle-right"></i>Estudiantes</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-angle-right"></i>Docentes</a></li>
                            </ul>    
                        </div> <!-- footer link -->
                    </div>
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contacto</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Medellín, Colombia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>321 325 5678</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>info@unad.edu.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright  text-center pt-15">
                            <p>Derechos Reservados © <a target="_blank" href="https://www.technosupport.co">Techno Support </a> sitio web de Adrián Ramírez </p>
                        </div>
                    </div>
                   
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
        </footer>
        <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html>
