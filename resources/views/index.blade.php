<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sociedad de expansion de Bendición Biomagnética S.P.A.</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <script type="text/javascript" src="{{url('js/jquery-3.2.1.min.js')}}"></script>




    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{url('devicons/css/devicons.min.css')}}" rel="stylesheet">

    <link href="{{url('simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{url('css/stiloDiv.css')}}">


    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

   <!--Region navegador-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#perfil"><!--href="#page-top"-->
        <span class="d-block d-lg-none">Menu</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/perfil.jpg" alt="" >
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#mision">Mision</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#historia">Historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#financiamiento">Financiamiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#links">Links de interes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#perfil">Perfil</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Logros</a>
          </li>
        -->
        </ul>
      </div>
    </nav>
    <!--ENDREGION navegador-->


    <!--Region presentacion-->
      <div class="container" style="padding: 2% 2% 8% 2%;">
         <img src="img/girasoles.png" class="img-responsive"  width="100%" height="auto"  style="border-radius:20px;">
      </div>
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="mision">
        <div class="my-auto">
          <h1 class="mb-0">Bendición
            <span class="text-primary">Biomagnética</span>
          </h1>
          <div class="subheading mb-5">Huérfanos 1117 · Oficina 1018 · Santiago · (+569) 2-26880810 ·
            <a href="mailto:name@email.com">roxanabarre@gmail.cl</a>
          </div>
            <!--ENDREGION presentacion-->
            <!--Region Mision--->
            <!--Div flotante-->
          <div class="container-fluid " >
                <div class="bg-success-copia text-white " style="border-radius: 20px;">
                <div style="margin: 10px;">
              <h2 class="centrar-texto"><small>Mision</small></h2>
            </div>
          </div>
          </div>
         <!----->
          <div class="container-fluid " >
                <div class="bg-success-copia text-white " style="border-radius: 20px;">
                <div style="margin: 10px;">
                  <br>
              <!--h2 class="centrar-texto"><small>Mision</small></h2-->
              <br>
               @yield('mision')
              <br>
               <a class="nav-link js-scroll-trigger" style="color:white;" href="#perfil">Roxana Barrera Acuña.</a>
              <br>
            </div>
          </div>
          </div>
        </div>
      </section>
     <!--ENDREGION Mision-->

     <!--Region historia-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="historia">
        <!--Div flotante-->
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
             <h2 class="centrar-texto"><small>Historia</small></h2>
          </div>
        </div>
        </div>
        <!---->
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
                <br>
             <!---h2 class="centrar-texto"><small>Historia</small></h2-->
              @yield('historia')
          </div>
        </div>
        </div>
      </section>
    <!--ENDREGION Historia-->

    <!--Region financiamiento-->
    <!--div flotante-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="financiamiento">
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
            <h2 class="centrar-texto"><small>Financiamiento</small></h2>
          </div>
        </div>
        </div>
        <!----->
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
                <br>
            <!--h2 class="centrar-texto"><small>Financiamiento</small></h2-->
            @yield('financiamiento')
          </div>
        </div>
        </div>
      </section>
   <!--ENDREGION financiamiento-->

   <!--Region Links-->
   <!--dIV FLOTANTE--->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="links">
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
            <h2 class="centrar-texto"><small>Links de interes</small></h2>
          </div>
        </div>
        </div>
        <!---->
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">

            <!--h2 class="centrar-texto"><small>Links de interes</small></h2-->
            <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IxPXOp-xvtI" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        </div>
      </section>
    <!--ENDREGION Links-->

    <!--Region Perfil-->
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="perfil">
      <!--Cuadro flotante perfil--->
        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">

            <h2 class="centrar-texto"><small>Perfil</small></h2>

          </div>
        </div>
        </div>
        <!--Fin--->


        <div class="container-fluid " >
              <div class="bg-success-copia text-white " style="border-radius: 20px;">
              <div style="margin: 10px;">
                <!--br>
            <h2 class="centrar-texto"><small>Perfil</small></h2-->
             @yield('perfil')
            <br>
          </div>
        </div>
        </div>
      </section>
      <!--ENDREGION Perfil-->
<!--
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Google Analytics Certified Developer</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              Mobile Web Specialist - Google Certification</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              2<sup>nd</sup>
              Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
            <li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              1<sup>st</sup>
              Place - James Buchanan High School - Hackathon 2006</li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              3<sup>rd</sup>
              Place - James Buchanan High School - Hackathon 2005</li>
          </ul>
        </div>
      </section>

    </div>
 -->

     <script type="text/javascript" src="{{url('js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>



  </body>

</html>
