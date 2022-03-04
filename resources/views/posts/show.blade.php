<x-app-layout>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
     <div class="container">

      
        <ol>
            <li><a href="{{route('home.index')}}">Inicio</a></li>
            <li><a href="{{route('posts.index')}}">Blog</a></li>
          </ol>
          <h2>{{$post->name}}</h2>

     </div>
   </section><!-- End Breadcrumbs -->
   <!-- ======= Blog Single Section ======= -->
   <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              @if ($post->image)
              <img id="img-post" src="{{Storage::url($post->image->url)}}"  >
              @else
              <img  id="img-post" src="https://caprobi.org.mx/wp-content/uploads/2019/05/imagen-no-disponible.jpg"  >
              @endif
               
            </div>

            <h2 class="entry-title">
              <a href="#">{{$post->name}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
             
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>

              </ul>
            </div>

            <div class="entry-content">
              <p>
                  {!!$post->body!!}
              
             {{--  <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt=""> --}}

            

            </div>

            <div class="entry-footer">
           
              <ul class="cats">
                <i class="bi bi-bookmark"></i>
                <li><a href="#">{{$post->category->name}}</a></li>
              </ul>

           
              <ul class="tags">
              
              @foreach ($post->tags as $tag)
                     <i class="bi bi-tag-fill"></i>
                    <li><a href="#">{{$tag->name}}</a></li>
              @endforeach
              </ul>
            </div>

          </article><!-- End blog entry -->

        

       

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Buscar</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categorias</h3>
            <div class="sidebar-item categories">
              <ul>
                @foreach ($categorias as $categoria)
                <li><a href="{{route('posts.category',$categoria)}}">{{$categoria->name}} </a></li>
            @endforeach
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
                @foreach ($post_recientes as $post_reciente)
                <div class="post-item clearfix">
                  @if ($post_reciente->image)
               
                    <img src="{{Storage::url($post_reciente->image->url)}}" alt="">
                  @else
                  <img  src="https://caprobi.org.mx/wp-content/uploads/2019/05/imagen-no-disponible.jpg"  >
                  @endif

           
             <h4><a href="{{route('posts.show',$post_reciente)}}">{{$post_reciente->name}}</a></h4>
             <time datetime="2020-01-01">Jan 1, 2020</time>
           </div>  
           @endforeach

             

            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                @foreach ($etiquetas as $etiqueta)
                        
                <li><a href="{{route('posts.tag',$etiqueta)}}">{{$etiqueta->name}}</a></li>
                @endforeach
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->
</x-app-layout>