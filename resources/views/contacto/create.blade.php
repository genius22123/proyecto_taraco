<x-app-layout>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-12">
              <div class="info-box mb-4">
                <i class="bi bi-geo-alt-fill"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
  
  
  
          </div>
  
          <div class="row">
         
            <div class="col-lg-6 ">

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d284462.15849241195!2d-70.08233151361975!3d-15.373010722421679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916795414c2d0913%3A0xe9f874e95a85dad1!2sPlaza%20Principal%20de%20Taraco!5e0!3m2!1ses-419!2spe!4v1627592004704!5m2!1ses-419!2spe" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
  
            <div class="col-lg-6">
            
              @if (session('info'))
              <div class="alert alert-success alert-dismissible" role="alert" id="liveAlert">
               
                <strong>Gracias!</strong> {{session('info')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
           
                {!! Form::open(['route' => 'taraco.contacts.store','class'=>'php-email-form']) !!}
                <div class="row">
                  <div class="col-md-6 form-group">
               
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu nombre']) !!}
                    
                         @error('name')
                      <span class="text-danger">{{$message}}</span>
                       @enderror
                      </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                   
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu email']) !!}
                    
                         @error('email')
                      <span class="text-danger">{{$message}}</span>
                       @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                 
                  {!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Ingresa asunto']) !!}
                    
                  @error('subject')
               <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group mt-3">
               
                  {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu mensaje']) !!}
                    
                  @error('message')
               <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
               
                <div class="text-center mt-3">
       
                        {!! Form::submit('Enviar', ['class' => 'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            

            </div>
  
          </div>
  
        </div>
     
      </section><!-- End Contact Section -->
</x-app-layout>