<x-app-layout>
     <!-- Slider main container -->
     <section id="hero">
        <div class="hero-container">
          <div id="slider-principal" class="swiper-container" >
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach ($sliders as $slider)
                  <div class="swiper-slide">
                <img  src="{{Storage::url($slider->url)}}" height="595" width="1880"  />
              </div>
              @endforeach
              
         
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
  
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
  
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </section>
      <!-- End Hero -->


        <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row">
            <div class="col-xl-4 col-lg-5" data-aos="fade-up">
              <div class="content text-center">
                <h3 >Bienvenidos al portal web oficial del Distrito de Taraco </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
               
              </div>
            </div>
  
            <div class="col-xl-8 col-lg-7 d-flex">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon"><i class="bi bi-journal-check"></i></div>
                      <h4 class="title"><a href="">Mesa de Partes VIRTUAL</a></h4>
                      <p class="description">Realiza tus trámites Sin salir de casa  </p>
                      <p class="description">Evitemos mas contagios </p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon"><i class="bi bi-cart4"></i></div>
                      <h4 class="title"><a href="">Tienda virtual</a></h4>
                      <p class="description">Productos 100% naturales y de gran calidad </p>
                    </div>
                  </div>
                  
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon"> <i class="bi bi-receipt"></i></div>
                      <h4 class="title"><a href="{{route('posts.index')}}">Noticias mas recientes </a></h4>
                      <p class="description">Todos los acontecimientos minuto a minuto en un solo lugar</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Documentos Section ======= -->
     <section id="documentos" class="documentos">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>documentos <span id="span">Principales</span></h2>
            
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="300">
            
          @foreach ( $category_documents as  $category_document)
              
          
            <div class="col-lg-4 col-md-6   mt-4">
          <center>
              <div class="icon-box" >
                <i class="bi bi-file-earmark-text-fill" style="color: #5578ff;"></i>
                <h3 class=""><a href="{{route('documento.categoria',$category_document)}}">{{$category_document->name}}</a></h3>
              </div>
            </center>
            </div>
            @endforeach
          
          
          
          
          </div>
  
        </div>
      </section><!-- End documentos Section -->

          <!-- ======= POSTS  Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2> Notas de <span id="span">prensa</span> </h2>
            <p>Publicaciones mas recientes</p>
  
          </div>
          <div class="row" id="grid-post">
             
            <div id="slider-prensa" class="owl-carousel owl-theme mt-4">

@foreach ($posts as $post)
    <div class=" swiper-slide" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src={{Storage::url($post->image->url)}}
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date"> {{$post->fecha_creacion}}</span>
                  <h3 class="post-title">
                    {{Str::limit($post->name,35)}}
                  </h3>
                  <a
                    href="{{route('posts.show',$post)}}"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Ver mas</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
@endforeach
              
  
            </div>
  
          </div>
       
  
        </div>
      </section><!-- End About Us Section -->


         <!-- ======= doc-res Section ======= -->
    <section id="doc-res" class="doc-res">
      
        <div class="section-title-normas" data-aos="fade-up">
          <h2> Utimos <span id="span-normas">documentos</span> </h2>
  
        </div>
        <div class="container position-relative" data-aos="fade-up">
  
          <div id="doc-res-slider" class="swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  


              @foreach ($docs as $doc)
                              <div class="swiper-slide">
                <div class="testimonial-item">
                  <h3>{{$doc->category->name}}</h3>
         
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$doc->extract}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    <a href="{{route('documento.categoria',$doc->category->name)}}">Ver mas </a>
                  </p>
                </div>
                
              </div><!-- End testimonial item -->
              @endforeach
              
            
      
          
              
  
         
  
             
  
           
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End doc-res Section -->


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <header data-aos="fade-up" data-aos-delay="200" class="section-title">
      <h2>Portafolio <span id="span">turistico</span></h2>
      <p>...</p>
    </header>
  

    <div class="row portfolio-container">
      @foreach ($portfolios as $portfolio)
           <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="zoom-in" data-aos-delay="300">
        <div class="portfolio-wrap">
          <img src="{{Storage::url($portfolio->url)}}" class="img-fluid"  alt="">
          <div class="portfolio-info">
   
            <p>{{$portfolio->title }}</p>
            <div class="portfolio-links">
              <a href="{{Storage::url($portfolio->url)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio->extract }}"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
      

    
  

    </div>

  </div>
</section><!-- End Portfolio Section -->

  <!-- ======= enlaces externos Section ======= -->
  <section id="enlaces-externos" class="enlaces-externos">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 >enlaces <span id="span"> externos </span> </h2>
      </div>

      <div id="slider-enlaces" class="swiper-container">
        <div class="swiper-wrapper align-items-center"  >
          <div class="swiper-slide">
            <a href="https://www.contraloria.gob.pe/">
            <img src="{{asset('img/enlaces/contraloria.png')}}" class="img-fluid" alt="">
            </a>
          </div>

          <div class="swiper-slide">
            <a href="https://www.gob.pe/">
            <img src="{{asset('img/enlaces/gob.png')}}" class="img-fluid" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://www.regionpuno.gob.pe/">
            <img src="{{asset('img/enlaces/gobierno-regional.png')}}" class="img-fluid" alt="">
          </a>
          </div>
          <div class="swiper-slide">
            <a href="https://www.sunass.gob.pe/">
            <img src="{{asset('img/enlaces/logo_nuevo.png')}}" class="img-fluid" alt="">
           </a>
          </div>
          <div class="swiper-slide">
            <a href="https://www.bn.com.pe/">
            <img src="{{asset('img/enlaces/logo-banco-nacion.png')}}" class="img-fluid" alt="">
          </a>
          </div>
      {{--     <div class="swiper-slide">
            <a href="https://www.mef.gob.pe/">
            <img src="{{asset('img/enlaces/mef.png')}}" class="img-fluid" alt="">
          </a>
          </div> --}}
          <div class="swiper-slide">
            <a href="https://www.reniec.gob.pe/">
            <img src="{{asset('img/enlaces/reniec.png')}}" class="img-fluid" alt="">
            </a>
          </div>
          <div class="swiper-slide">
            <a href="https://www.gob.pe/sunarp">
            <img src="{{asset('img/enlaces/sunarp.png')}}" class="img-fluid" alt="">
          </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End enlaces-externos Section -->
</x-app-layout>