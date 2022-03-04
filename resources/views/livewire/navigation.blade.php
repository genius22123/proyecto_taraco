<div>
    <section id="topbar" class="d-flex align-items-center">
        <div
          class="
            container
            d-flex
            justify-content-center justify-content-md-between
          "
        >
        <div class="social-links  d-md-flex align-items-center">
          <a href="https://www.facebook.com/gobiernolocaltaraco"  target="_blank" class="facebook">Facebook Oficial <i class="bi bi-facebook"></i></a>
        </div>
          <div class="contact-info  d-none d-md-flex align-items-center">
           
            <i class="bi bi-phone align-items-center ms-4"
              ><span class="fs-6 fw-lighter">+51 99000000</span></i
            >
          </div>
         
        </div>
      </section>

      
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
          <div class="logo">
            <a href="{{route('home.index')}}"
              ><img src="{{asset('img/logo2.png')}}" alt="" class="img-fluid" />
              <a id="logo-text" href="{{route('home.index')}}">Muni Taraco</a></a
            >
          </div>
  
          <nav id="navbar" class="navbar  fw-normal">
            <ul>
              <li class="dropdown"><a href="#"><span>Taraco</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{route('taraco.municipalidad')}}">Consejo Municipal</a></li>
                  <li><a href="{{route('taraco.historia')}}">Historia de Taraco</a></li>
                  <li><a href="{{route('taraco.himno')}}">Himno de Taraco</a></li>
                  <li><a href="{{route('taraco.ubicacion')}}">Ubicacion Geografica</a></li>
                </ul>
                <li class="dropdown"><a href="#"><span>Documentos de gestion</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    @foreach ($gobierno_docs as $gobierno_doc)
                    <li><a href="{{route('gobierno.show',$gobierno_doc)}}">   {{$gobierno_doc->name}}</a></li>
                     @endforeach
                  </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Documentos Normativos</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                      @foreach ($category_documents as $category_document)
                                     <li><a href="{{route('documento.categoria',$category_document)}}">{{$category_document->name}}</a></li>
                      @endforeach
         
               
                  </ul>
                </li>
              
                  <li class="link"><a href="{{route('posts.index')}}"><span>Publicaciones</span></i></a>
                 
                </li>
                <li class="link"><a href="{{route('taraco.contacts.index')}}"><span>Contacto</span></i></a>
                 
                </li>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </header>
      <!-- End Header -->
</div>
