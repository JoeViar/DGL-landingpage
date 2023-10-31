<x-layout>
  @section('scripts')
    <script src="dist/js/timeline.min.js"></script>
  @endsection
	
	@section('content')


  <div class="container-fluid py-4  " id="header_img2" >
    <div class="container-fluid" >
     <div class="row ">
      <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
        <h1 class="" id="header_title" >Sobre nosotros  </h1>

        {{-- @if($dir=='index')
          <h1 class="mb-5 text-center"id="header_title" > Conócenos </h1>

        @else
          @if($dir=='about_us')
            <h1 class="" id="header_title" >Sobre Nosotros  </h1>
          @else
            @if($dir=='distributor')
              <h1 class="" id="header_title" >Conviértete en distribuidor </h1>
            @else
              @if($dir=='find_us')
                <h1 class="" id="header_title" >Encuéntranos </h1>
              @else
                @if($dir=='hr')
                  <h1 class="" id="header_title" >Bolsa de trabajo </h1>
                @else
                  @if($dir=='blogDisp')
                    <h1 class="" id="header_title" >Blog </h1>
                  @endif
                @endif
              @endif


            @endif
          @endif

        @endif --}}
     </div>
   </div>
      <div class="row my-5 p-y5 text-center">
        <div class="col-md-12 mt-5 center-block text-center justify-content-center">
          <a href="#title">
          <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
        </a>
       </div>
      </div>
   </div> 
</div>
           
             
       <section id="title">
        <div class="container-fluid div-monitor " id="about_us_our_history">   
          <div class="row m-1 h-100 ">
            <div class="col p-5 m-2  h-100 text-center justify-content-center">
              <div class="row my-2 p-3 ">
                <h2 class="ml-5 f-42 text-white"> Nuestra historia</h2>                  
              </div>
              <div class="row  p-3 ">
                <div class="col-8 p-4">
                  <p class=" f-24 text-white text-justify">  Somos una empresa de distribución y desarrollo de canales de venta que representa a fabricantes y desarrolladores mundiales de tecnología como gadgets, teléfonos móviles, etc. </p>
                </div>
              </div>
            </div>
            <div class="col p-1 h-100              text-center">
              {{-- <img id="our_history_img"src="{{asset('assets/logos/founders.jpg')}}" alt="">  --}}
            </div>
          </div>
        </div>
        <div class="container-fluid div-mobile text-center py-3" id="about_us_our_history">   
          <div class="row  text-white justify-content-center text-center">
            <h3 class="text-center"> Fundadores </h3>
          </div>
          <div class="row p-5">
            <p class=" text-white  text-justify">Somos una empresa de distribución y desarrollo de canales de venta que representa a fabricantes y desarrolladores mundiales de tecnología como gadgets, teléfonos móviles, etc.</p>
          </div>
          
        </div>
    
      </section> 
        <div class="container-fluid p-5 mb-5 justify-content-center text-center ">
          <h3 id="orange_title">INNOVANDO UNA GRAN TRAYECTORIA </h3>
          <div class="div-monitor">
            <section id="timeline" >
  
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/801/801/nature)"></div>
              
              <div class="tl-year">
                <h2 class="tl-date">2010</h2>
              </div>
          
              <div class="tl-content">
                {{-- <h1>Lorem ipsum dolor sit</h1> --}}
                <p>Surge una alianza importante para realizar el proceso 
                  de servicio posventa con garantías, fullfilment center y 
                  logística para carriers en USA y México.</p>
              </div>
          
            </div>
          
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>
              
              <div class="tl-year">
                <h2 class="tl-date">2012</h2>
              </div>
          
              <div class="tl-content">
                {{-- <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1> --}}
                <p>Nacen 2 marcas propias, VIBE- celulares móviles 
                  en telefonía libre y HYPE- accesorios de celulares 
                  y gadgets, las cuales se comercializaban en 
                  tiendas propias y en el canal retail</p>
              </div>
          
            </div>
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>
              
              <div class="tl-year">
                <h2 class="tl-date">2015</h2>
              </div>
          
              <div class="tl-content">
                {{-- <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1> --}}
                <p>
                  El giro de negocio da un turn up, dejamos la fabricación 
                  de celulares como de accesorios, cerramos las tiendas 
                  propias y comenzamos a hacer sinergias con marcas 
                  OEM, para introducirlas por primera vez al mercado 
                  como “Telefonía Libre”
                </p>
              </div>
          
            </div>
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/803/803/nature)"></div>
              
              <div class="tl-year">
                <h2 class="tl-date">2018</h2>
              </div>
          
              <div class="tl-content">
                {{-- <h1 class="f3 text--accent ttu">Phasellus mauris elit</h1> --}}
                <p>
                  Logramos la distribución oficial de las marcas 
                  más importantes en el país y comenzamos con 
                  la operación de tiendas oficiales en plazas 
                  comerciales y canales online.
                </p>
              </div>
          
            </div>
          
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>
              
              <div class="tl-year">
                <h1  class="  tl-date ">2021</h1>
              </div>
          
              <div class="tl-content">
                {{-- <h2 class="f3 text--accent ttu">Mauris vitae nunc elem</h2> --}}
                <p>
                  El canal online crece rápidamente, posicionándonos 
                  como los TOP Sellers en las plataformas digitales 
                  más importantes de América Latina.
                </p>
              </div>
          
            </div>
            </section>
          </div>
          
          <section>
            <div class="col-lg-12 grid-margin my-4 py-3 text-center div-mobile ">
              
                 
              <div class="owl-carousel my-4">
                <div class="item">
                  <div class="tl-item">
              
                    <div class="tl-bg" style="background-image: url(https://placeimg.com/801/801/nature)"></div>
                    
                    <div class="tl-year">
                      <h2 class="tl-date">2010</h2>
                    </div>
                
                    <div class="tl-content">
                      {{-- <h1>Lorem ipsum dolor sit</h1> --}}
                      <p>Surge una alianza importante para realizar el proceso 
                        de servicio posventa con garantías, fullfilment center y 
                        logística para carriers en USA y México.</p>
                    </div>
                
                  </div>
                   
                </div>
                <div class="item">
                    <div class="tl-item">
              
                     <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>
                      
                     <div class="tl-year">
                       <h2 class="tl-date">2012</h2>
                     </div>
                
                     <div class="tl-content">
                       {{-- <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1> --}}
                       <p>Nacen 2 marcas propias, VIBE- celulares móviles 
                         en telefonía libre y HYPE- accesorios de celulares 
                         y gadgets, las cuales se comercializaban en 
                         tiendas propias y en el canal retail</p>
                     </div>
                
                    </div>
                </div>

                <div class="item">
                  <div class="tl-item">
              
                    <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>
                    
                    <div class="tl-year">
                      <h2 class="tl-date">2015</h2>
                    </div>
                
                    <div class="tl-content">
                      {{-- <h1 class="f3 text--accent ttu">Vestibulum laoreet lorem</h1> --}}
                      <p>
                        El giro de negocio da un turn up, dejamos la fabricación 
                        de celulares como de accesorios, cerramos las tiendas 
                        propias y comenzamos a hacer sinergias con marcas 
                        OEM, para introducirlas por primera vez al mercado 
                        como “Telefonía Libre”
                      </p>
                    </div>
                
                  </div>
                </div>
                <div class="item">
                  <div class="tl-item">
              
                    <div class="tl-bg" style="background-image: url(https://placeimg.com/803/803/nature)"></div>
                    
                    <div class="tl-year">
                      <h2 class="tl-date">2018</h2>
                    </div>
                
                    <div class="tl-content">
                      {{-- <h1 class="f3 text--accent ttu">Phasellus mauris elit</h1> --}}
                      <p>
                        Logramos la distribución oficial de las marcas 
                        más importantes en el país y comenzamos con 
                        la operación de tiendas oficiales en plazas 
                        comerciales y canales online.
                      </p>
                    </div>
                
                  </div>
                </div>
                <div class="item">
                  <div class="tl-item">
              
                    <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>
                    
                    <div class="tl-year">
                      <h1  class="  tl-date ">2021</h1>
                    </div>
                
                    <div class="tl-content">
                      {{-- <h2 class="f3 text--accent ttu">Mauris vitae nunc elem</h2> --}}
                      <p>
                        El canal online crece rápidamente, posicionándonos 
                        como los TOP Sellers en las plataformas digitales 
                        más importantes de América Latina.
                      </p>
                    </div>
                
                  </div>
                </div>

                 
              </div>
          </section>

   
        </div>
   
        <div class="container">
          <div class="row justify-content-center">
            <div  class="col-xl-5 ident-column p-5 m-4 text-white  col-mv">
              <div class="row">
                <div  class=" col p-3 text-center">
                  <img class="img-logo" src={{asset('assets/img/Mision500.png')}} alt="">
                </div>
              </div>
              <div class="row">
                <div  class=" col p-1 text-center">
                 <h4 class="title_iden">Misión</h4>
                </div>
              </div>
              <div class="row">
                <div  class=" col p-5 text-center">
                 <p class="parragraph_iden">
                  Ofrecemos productos tecnológicos de 
                  vanguardia que faciliten la vida de las 
                  personas. Nuestras estrategias 
                  comerciales permiten cumplir las 
                  expectativas de nuestros clientes y 
                  consumidores
                </p>
                </div>
              </div>

              
            </div>
            <div  class="col-xl-5 col-mv p-5 m-4 col-mv text-white">
              <div class="row">
                <div  class=" col p-3 text-center">
                  <img class="img-logo" src={{asset('assets/img/Vision500.png')}} alt="">
                </div>
              </div>
              <div class="row">
                <div  class=" col p-1 text-center">
                 <h4 class="title_iden ">Visión</h4>
                </div>
              </div>
              <div class="row">
                <div  class=" col p-5 text-center">
                  <p class="parragraph_iden">
                    Ser la solución #1 en abastecimiento de 
                    productos tecnológicos en México, 
                    enfocándonos en ofrecer la mejor 
                    calidad y precio a nuestros clientes
                  </p>
                </div>
              </div>

              
            </div>


          </div>

        </div>
        

       

          <div  class="container my-5 p-5 ">
            
            <div class="row text-center mt-5 justify-content-center pt-5">
              <img id="coworkers_img" src="{{asset('assets/img/Coworkers.png')}}" alt="">

            </div>
          </div>

         
         

     
         
          
          
        


     

           
	@endsection

</x-layout>