<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  <div class="container-fluid py-4  " id="header_img" style="background-image: url('../assets/logos/LogosPNG/LogosSize/Marcas.png');" >
    <div class="container-fluid" >
     <div class="row ">
      <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
        <h1 class="" id="header_title" >Las mejores Marcas </h1>

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
            {{-- <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button> --}}
          </a>
        </div>
      </div>
   </div> 
</div>

       

     
      <div class="container p-5" > 
        <div class="text-center">
          <h3 style="font-weight: bold" id="orange_title" >Categorias</h3>
          <div class="row">
            <div class="col-12 col-sm-4  justify-content-center">
                {{-- <div class=" d-flex flex-row justify-content-center">
                  <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
                </div> --}}
                <div class="row">
                  <div class="col-4 v-center justify-content-end ">
                    <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/tablets.png')}}" alt="">


                  </div>
                  <div class="col-8  v-center">
                    <h5 class="icon-title"> Tabletas</h5>

                  </div>

                </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/casa-inteligente.png')}}" alt="">


                </div>
                <div class="col-8  v-center">
                  <h5 class="icon-title"> Smarthome</h5>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/VIDEOJUEGOS.png')}}" alt="">


                </div>
                <div class="col-8  v-center">
                  <h5 class="icon-title"> Consolas y videojuegos</h5>

                </div>

              </div>
            </div>
             


          </div>
          <div class="row">
            <div class="col-12 col-sm-4 justify-content-center">
                {{-- <div class=" d-flex flex-row justify-content-center">
                  <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
                </div> --}}
                <div class="row">
                  <div class="col-4 v-center justify-content-end ">
                    {{-- <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/.png')}}" alt="movilidad Icono">
 --}}
                       <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                       width="100%" height="100%" viewBox="0 0 256.000000 256.000000"
                       preserveAspectRatio="xMidYMid meet">                     

                      <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)"
                      fill="#000000" stroke="none">
                      <path d="M1468 2364 c-53 -28 -73 -101 -42 -153 28 -48 50 -55 191 -59 124 -4
                      132 -5 137 -26 3 -11 43 -193 90 -402 l86 -382 -163 -343 c-89 -189 -166 -350
                      -170 -356 -6 -10 -84 -13 -332 -13 l-323 0 -7 42 c-36 212 -206 388 -420 433
                      -38 8 -87 15 -107 15 -111 0 -128 -149 -19 -165 145 -22 190 -40 262 -103 47
                      -42 102 -133 114 -189 l7 -33 -59 0 -58 0 -24 45 c-45 85 -149 155 -252 170
                      -53 8 -147 -9 -200 -35 -53 -28 -119 -99 -148 -160 -37 -79 -37 -192 0 -270
                      64 -137 186 -209 332 -198 113 9 217 76 268 173 l24 45 365 0 c201 0 437 3
                      524 7 153 6 160 7 187 32 17 16 73 122 145 276 64 138 120 253 123 257 4 4 15
                      -33 25 -83 l18 -90 -40 -35 c-25 -21 -55 -62 -74 -102 -29 -59 -33 -76 -33
                      -147 1 -91 22 -150 80 -221 48 -58 143 -105 227 -111 277 -22 452 288 299 528
                      -38 61 -89 98 -170 126 l-66 22 -27 118 c-16 65 -86 386 -158 713 -72 327
                      -136 608 -142 624 -24 59 -53 66 -258 66 -144 -1 -191 -4 -212 -16z m-1034
                      -1709 l30 -20 -55 -8 c-65 -9 -100 -32 -115 -78 -14 -41 -3 -85 30 -118 19
                      -18 39 -25 82 -29 l57 -5 -34 -18 c-19 -10 -56 -18 -82 -19 -97 0 -157 53
                      -165 146 -5 65 23 121 77 153 45 27 131 25 175 -4z m1937 -53 c35 -52 34 -126
                      -4 -175 -36 -48 -75 -67 -132 -67 -58 0 -109 23 -137 63 -26 37 -36 124 -18
                      158 13 23 13 22 27 -24 16 -55 57 -87 111 -87 72 0 108 50 99 136 -5 49 -4 52
                      12 42 10 -6 28 -27 42 -46z"/>
                      </g>
                      </svg>


                  </div>
                  <div class="col-8  v-center">
                    <h5 class="icon-title"> Movilidad</h5>

                  </div>

                </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/smartphones.png')}}" alt="">


                </div>
                <div class="col-5  v-center">
                  <h5 class="icon-title"> Celulares y Telefonía</h5>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/accesorios.png')}}" alt="">


                </div>
                <div class="col-8  v-center">
                  <h5 class="icon-title"> Accesorios</h5>

                </div>

              </div>
            </div>
             


          </div>
          <div class="row">
            <div class="col-12 col-sm-4 justify-content-center">
                {{-- <div class=" d-flex flex-row justify-content-center">
                  <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
                </div> --}}
                <div class="row">
                  <div class="col-4 v-center justify-content-end ">
                    <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/laptops.png')}}" alt="">


                  </div>
                  <div class="col-8  v-center">
                    <h5 class="icon-title"> Laptop</h5>

                  </div>

                </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/audio.png')}}" alt="">


                </div>
                <div class="col-8  v-center">
                  <h5 class="icon-title"> Audio</h5>

                </div>

              </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center">
              {{-- <div class=" d-flex flex-row justify-content-center">
                <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
              </div> --}}
              <div class="row">
                <div class="col-4 v-center justify-content-end ">
                  <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/tablets.png')}}" alt="">


                </div>
                <div class="col-8  v-center">
                  <h5 class="icon-title"> Tabletas</h5>

                </div>

              </div>
            </div>
             


          </div>
        </div>     
      </div>
      <div class="contanier-fluid p5 text-center" >
        <h2 style="font-weight: bold" id="orange_title" >Marcas</h2>
        <div class="row justify-content-between  p-5">
          <div class="col-md-3 col-6  p-3">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/hurley.png')}}" alt="">
          </div>
          <div class="col-md-3 col-6 p-3">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/Honor.png')}}" alt="">
          </div>
          <div class="col-md-3 col-6 p-3">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/samsung.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/hover.png')}}" alt="">
            
          </div>
          <div class="col-md-3 col-6  p-3 ">
            <img style="width: 50%; height: auto;  "  src="{{asset('../assets/logos/LogosPNG/LogosSize/DELL.png')}}" alt="">
            
          </div>
          <div class="col-md-3 col-6 text-center py-4 p-3">
            <img style="width: 100%; height: auto; transform:scale(2);"  src="{{asset('../assets/logos/LogosPNG/LogosSize/amazfit.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3">
              <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/ZTE.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/TCL.png')}}" alt="">            
          </div>
          <div class="col-md-3 col-6 p-3 div-monitor ">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/alcatel.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/xiaomi.png')}}" alt="">
          </div>
          <div class="col-md-3 col-6 p-3 div-monitor">
            <img style="width: 50%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/HP.png')}}" alt="">
          </div>
          <div class="col-md-3 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/LENOVO.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3 div-monitor ">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/nintendo.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/XBOX.png')}}" alt="">
            
          </div>
          <div class="col-md-3 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/inokom.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/OMEN.png')}}" alt="">

          </div>
          <div class="col-md-3 col-6 p-3  div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/huawei.png')}}" alt="">

          </div>
          <div class="col-md-4 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/philips.png')}}" alt="">

          </div>
          <div class="col-md-4 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/google.png')}}" alt="">

          </div>
          <div class="col-md-4 col-6 p-3 div-monitor">
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/.png')}}" alt="">

          </div>
  
        
  
  
  
        </div>
       
      </div>
      <div class="container text-center">
        <h3 style="font-weight: bold" id="orange_title" |>Y más..</h3>
        <img style="width: 40%; height: auto;" src="{{asset('../assets/img/favicon/android-chrome-512x512.png')}}" alt="DGL">

      </div>
      
        
     
          
          
        


     

           
	@endsection

</x-layout>