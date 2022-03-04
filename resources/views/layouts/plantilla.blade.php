<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>    @yield('title')</title>

       <!-- Google Fonts -->
       <link
       href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
       rel="stylesheet"
     />

        <!-- Styles Bootstrap -->
        <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}" type="text/css"> 
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Swiper js -->
        <link rel="stylesheet" href="{{asset('swiper-js/css/swiper-bundle.min.css')}}" type="text/css"> 
        <!-- Owl carrusel -->
        <link rel="stylesheet" href="{{asset('owl-carusel/owl-carousel.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{asset('owl-carusel/theme.css')}}" type="text/css"> 
         <!-- GlightBox -->
         <link rel="stylesheet" href="{{asset('glightbox/css/glightbox.min.css')}}" type="text/css"> 
          <!-- Aos js -->
          <link rel="stylesheet" href="{{asset('aos/aos.css')}}" type="text/css">
            <!--my style-->
            <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">  

        {{-- datatable --}}
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
        @livewireStyles

     
    </head>
    <body>
     

     
            @livewire('navigation')


            <!-- Page Content -->
            <main>
             <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{route('home.index')}}">Inicio</a></li>
            <li>@yield('link')</li>
            <li>@yield('link2')</li>
          </ol>
          <h2>@yield('name')</h2>
  
        </div>
      </section><!-- End Breadcrumbs -->
      @yield('content')
            </main>
      <!-- ======= Footer ======= -->
<footer id="footer">


    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
  
              
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contacto</h4>
                <p>
                  xxxxxxxx <br>
                  xxxxxx2<br>
                  peru <br><br>
                  <strong>Telefono:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
  
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">docuemntos</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">normas</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">comunicados</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">convocartortias</a></li>
                </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Horario de atencion</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">lunes  a  Viernes</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">8:00 am  a 17:00 pm</a></li>
                
                </ul>
              </div>
  
  
              <div class="col-lg-3 col-md-6 footer-info">
                <h3>Muni Taraco</h3>
                  <img src="{{asset('img/logo2.png')}}" alt="" height="150px">
                <div class="social-links mt-3">
                  <a href="{{route('home.index')}}" class="twitter"><i class="bi bi-facebook"></i></a>
                  
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Muni Taraco</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->
  
  <div id="preloader">
   <img id="img-pre" src="{{asset('img/logo2.png')}}" alt="" height="15px">
  </div>

        @stack('modals')

        @livewireScripts
<!-- jquery -->
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
 <!-- bootstrao js -->
        <script src="{{ asset('bootstrap-5/js/bootstrap.min.js') }}"></script>
       <!-- swiper -->
        <script src="{{ asset('swiper-js/js/swiper-bundle.min.js') }}"></script>
       <!-- owl carrusel -->
        <script src="{{ asset('owl-carusel/owl-carousel.js') }}"></script>
        <!-- glightbox -->
        <script src="{{ asset('glightbox/js/glightbox.min.js') }}"></script>
          <!-- aos -->
          <script src="{{ asset('aos/aos.js') }}"></script>
                <!-- js main -->
                <script src="{{ asset('js/scritps.js') }}"></script>
                <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
                <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
                <script>
                    $('#documentos-tabla').DataTable({
                      responsive:true,
                      autoWidth:false,
                      "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search': 'Buscar: ',
            'paginate': {
              'next': 'Siguiente',
              'previous': 'Anterior'
            }
        }
                    });
                </script>
    </body>
</html>
