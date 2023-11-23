<x-layout>

	
	@section('content')
  <div class="owl-carousel-header ">
    <div class="item">


         <div class="container-fluid py-4  " style="  background-image: url('../assets/logos/LogosPNG/LogosSize/Home.png');
         " id="header_img" >
           <div x class="container-fluid" >
              <div class="row ">
               <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">

                <h1 class="mb-5 text-center"id="header_title" > Conócenos </h1>
     
              </div>
            </div>
         <div class="row my-5 p-y5 text-center">
           <div class="col-md-12 mt-5 center-block text-center justify-content-center">
            <a href="{{route('about_us')}}">
              <button  id="header_button" type="button" class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
            </a>
          </div>
         </div>
      </div> 
      </div>
    </div>
   
    <div class="item">
      {{-- <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/amazon.png')}}" alt="image"/> --}}

        <div class="container-fluid py-4   " style="  background-image: url('../assets/logos/LogosPNG/LogosSize/Distribuidor.png');" id="header_img" >
          <div class="container-fluid" >
           <div class="row ">
            <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
              <h1 class="" id="header_title" >Conviértete en distribuidor </h1>

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
                <a href="{{route('distributor')}}">
                  <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
                </a>
             </div>
            </div>
         </div> 
      </div>
    </div>
    <div class="item">
      {{-- <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/amazon.png')}}" alt="image"/> --}}

        <div class="container-fluid py-4  "style="  background-image: url('../assets/logos/LogosPNG/LogosSize/Encuentranos.png');" id="header_img" >
          <div class="container-fluid" >
           <div class="row ">
            <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
              <h1 class="" id="header_title" >Encuéntranos </h1>

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
                <button  id="header_button" type="button" onclick="window.location='{{ route("find")}}'" class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
             </div>
            </div>
         </div> 
      </div>
    </div>
    <div class="item">
      {{-- <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/amazon.png')}}" alt="image"/> --}}

        <div class="container-fluid py-4   " style="  background-image: url('../assets/logos/LogosPNG/LogosSize/Bolsa-De-trabajo.png');" id="header_img" >
          <div class="container-fluid" >
           <div class="row ">
            <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
              <h1 class="" id="header_title" >Bolsa de trabajo </h1>

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
                <a href="{{route('hr')}}">
                  <button  id="header_button" type="button" class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>                
                </a>
             </div>
            </div>
         </div> 
      </div>
    </div>
    <div class="item">
      {{-- <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/amazon.png')}}" alt="image"/> --}}

        <div class="container-fluid py-4  " style="  background-image: url('../assets/logos/LogosPNG/LogosSize/blog.png');" id="header_img" >
          <div class="container-fluid" >
           <div class="row ">
            <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">

              <h1 class="" id="header_title" >Blog </h1>
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
                <a href="{{route('blogDisp')}}">
                  <button  id="header_button" type="button" class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>                
                </a>
             </div>
            </div>
         </div> 
         
    </div>
   
    



  </div>
  </div> 
  

        <div class="container-fluid my-3 py-3">   
            <div class="col-lg-12 grid-margin text-center ">
              <h3 id="orange_title">Nuestros Aliados </h3>
                 
              <div class="owl-carousel my-4">
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/amazfit.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/apple.png')}}" alt="image"/>
                </div>

                <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/DELL.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/epson.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/Honor.png')}}" alt="image"/>
                </div>

                 <div class="item">
                    <img  id="imgCarrousel"src="{{asset('assets/logos/LogosPNG/LogosSize/HP.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/hurley.png')}}" alt="image"/>
                </div>

                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/LENOVO.png')}}" alt="image"/>
                </div>

                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/nintendo.png')}}" alt="image"/>
                </div>

                 <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/OMEN.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/samsung.png')}}" alt="image"/>
                </div>

                 <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/TCL.png')}}" alt="image"/>
                </div>
                 <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/XBOX.png')}}" alt="image"/>
                </div>
                 <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/xiaomi.png')}}" alt="image"/>
                </div>
                 <div class="item">
                    <img  id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/ZTE.png')}}" alt="image"/>
                </div>
                 {{-- <div class="item">
                    <img   id="imgCarrousel"src="{{asset('assets/logos/LogosPNG/LogosSize/huawei.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/ingrammicro.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/la-gran-ciudad.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/ley.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/linio.png')}}" alt="image"/>
                </div>

                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/liverpool.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/lumen.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/macro.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/mavi.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/mercadolibre.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/mixup.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/mobo.png')}}" alt="image"/>
                </div>

                 <div class="item">
                    <img   id="imgCarrousel"src="{{asset('assets/logos/LogosPNG/LogosSize/office.png')}}" alt="imaaage"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/pcel.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/privalia.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/rac.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/rac2.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/radioshack.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/sams.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/surtidora.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/viastara.png')}}" alt="image"/>
                </div>
                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/vpg.png')}}" alt="image"/>
                </div>

                <div class="item">
                    <img   id="imgCarrousel" src="{{asset('assets/logos/LogosPNG/LogosSize/walmart.png')}}" alt="image"/>
                </div> --}}

              </div>
            </div>
          </div> 
             
       
        <div class="container-fluid div-monitor " id="our_history">   
         <a href="{{url('about_us')}}">
          <div class="row m-1 p-4 ">
            <div  class="col p-1  d-flex justify-content-end align-items-center ">
              <h2 id="our_history_title" > Nuestra historia</h2>
            </div>
            <div class="col    text-center">
              <img id="our_history_img" src={{asset('assets/logos/founders.jpg')}}  class="align-middle"alt="">
            </div>
          </div>
          </a>
        </div>
        <div class="container-fluid div-mobile " id="our_history">   
          <a href="{{url('about_us')}}">
           <div class="row m-1  ">
             <div  class="col p-1  d-flex justify-content-center align-items-center ">
               <h2 id="our_history_title" > Nuestra historia</h2>
             </div>
             <div class="col    text-center">
               <img id="our_history_img" src={{asset('assets/logos/founders.jpg')}}  class="align-middle"alt="">
             </div>
           </div>
           </a>
         </div>

          <div class="container-fluid justify-content-center p-5">
            {{-- <img id="channels" src="{{asset('assets/logos/channel.gif')}}" alt=""> --}}
            <div>

            </div>

            <div class="filter">
              <h1>Filtering</h1>
              {{-- <button data-name='*' class="btn btn-info active">All</button> --}}
              <button data-name=".fruit" class="btn btn-primary">Etail</button>
              <button data-name=".flower" class="btn btn-danger">Marketplace</button>
              <button data-name=".bird" class="btn btn-success">B2B</button>
              <button data-name=".bird" class="btn btn-success">Retail Regional</button>
              <button data-name=".bird" class="btn btn-success">Retail</button>


            </div>
            {{-- <div class="sort">
              <h1>sorting</h1>
              <button data-name='name' class="btn btn-primary">name</button>
              <button data-name='original-order' class="btn btn-info active">original</button>
              <button data-name='random' class="btn btn-dark">random</button>
            </div> --}}
            <div class="grid">
              <div class="grid-item flower">
                <img src="{{asset('assets/logos/LogosPNG/LogosSize/walmart.png')}}" class="filter-img p-1" alt="">
              </div>
              <div class="grid-item bird">Parrot</div>
              <div class="grid-item fruit">Banana</div>
              <div class="grid-item flower">Tulip</div>
              <div class="grid-item bird">Sparrow</div>
              <div class="grid-item flower">Marigold</div>
              <div class="grid-item fruit">Orange</div>
              <div class="grid-item bird">Owl</div>
              <div class="grid-item bird">
                <img src="#" alt="">
              </div>

            </div>
           
         
            
            
          </div>

       

        <div id="job-offers" class="container-fluid  p-5">
          <a  href="{{url('hr')}}"> 
            <div class="div-monitor">
              <div class="row   justify-content-center my-5 ">
                <div class="col-md-3 d-flex px-0  justify-content-end ">
                  <img id="job_offers_img" class="rounded float-end" src="{{asset('assets/logos/job_img.png')}}" alt="">
                </div>
                
                <div class="col-md-6 p-0 text-center">

                  <h2 style="font-size:5vw; color: 000;" > Explora nuestras <br/>  
                    OFERTAS LABORALES
                    </h2>

                </div>
                

              </div>
            </div>
            <div class="div-mobile">
              <div class="row justify-content-center my-5">
                <div class="col-md-6 text-center">
                  <img id="job_offers_img" class="rounded float-end " src="{{asset('assets/logos/job_img.png')}}" alt="">

                </div>
                <div class="col-md-6">
                    <h2 style="font-size:1.8rem;" class="m-1"> Explora nuestras <br/>  
                      OFERTAS LABORALES
                    </h2>

                </div>

              </div>
            </div>
          </a>
        </div>

         <div class="container-fluid p-4 ">
          <div class="row justify-content-center mt-5">
            <h3 style="font-size: 3rem;"  >BLOG </h3>
          </div>
           
           <div class="row justify-content-center p-2">
          
            <div class="col-md-4 text-center">
                <div class="row justify-content-center" id="blog_enty_row">
                  <div id="blog_entry" >
                    {{-- <a href={{route('blogEntry')}}> --}}
                    <div class="row text-center p-2 ">
                      <img id="blog_img" src={{asset('assets/img/blog_cover.png')}} alt="">
                    </div>
                    <div class="blog-text">
                      <div class="row justify-content-center">
                        <h4> Un recorrido por nuestra celebración del 15 de Septiembre </h4>
                        
                      </div>
                      <div class="row justify-content-center">
                        <p class=""> Tuvimos la fortuna de conmemorarlo con una explosión de orgullo y cultura mexicana. 💚⚪❤️ Pudimos expresar a todo pulmón nuestro amor por nuestra tierra y nuestras tradiciones 🎉.   </p>
                        {{-- <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam magni, corporis incidunt ex vero repellendus, velit consequuntur corrupti quia maiores voluptatem molestias tempore culpa eos impedit sint laborum, numquam totam.</span> --}}
                      </div>
                    </div>
                   
                    {{-- </a> --}}
                  </div>
                  
                </div>
          
          </div>
           
          </div>
          
          <div class="row justify-content-center p-5">
            <img src="{{asset('assets/img/favicon/android-chrome-192x192.png')}}" alt="">
          </div>


         
          @section('scripts')
          
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
          <script src="js/isotope.pkgd.min.js"></script>
          <script>
            var $grid = $('.grid').isotope({
              itemSelector: '.grid-item',
              layoutMode: 'fitRows',
              getSortData: {
                name: function (element) {
                  return $(element).text();
                }
               
              }
            });
            $grid.isotope({
                  filter: ".bird"
                });
            $('.filter button').on("click", function () {
              var value = $(this).attr('data-name');
                $grid.isotope({
                  filter: value
                });
              $('.filter button').removeClass('active');
              $(this).addClass('active');
            })
            $('.sort button').on("click", function () {
              var value = $(this).attr('data-name');
              $grid.isotope({
                sortBy: value
              });
              $('.sort button').removeClass('active');
              $(this).addClass('active');
            })
          </script>
          @endsection
         </div>

         
          
          
        


     

           
	@endsection

</x-layout>