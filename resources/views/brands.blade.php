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
          <h3>Categorias</h3>
          <div class="row">
            <div class="col justify-content-center">
                {{-- <div class=" d-flex flex-row justify-content-center">
                  <i class="fa-solid fa-mobile fa-xl icon-category"></i> <h5 class="icon-title"> Tablets</h5>
                </div> --}}
                <div class="row">
                  <div class="col-4 v-center justify-content-end ">
                    <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/tablets.png')}}" alt="">


                  </div>
                  <div class="col-8  v-center">
                    <h5 class="icon-title"> Tablets</h5>

                  </div>

                  </div>
                </div>
                <div class="col">
                    2
                </div>
                <div class="col">
                    3
                </div>
             


          </div>
          <div class="row">
            <div class="col">
              
            </div>
            <div class="col">
                2
            </div>
            <div class="col">
                3
            </div>
        

          </div>

        </div>     
      </div>
      <div class="contanier-fluid p5 text-center" >
        <h2>Marcas</h2>
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
            <img style="width: 100%; height: auto;"  src="{{asset('../assets/logos/LogosPNG/LogosSize/apple.png')}}" alt="">

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
        <h3>Y Más</h3>
        <img style="width: 40%; height: auto;" src="{{asset('../assets/img/favicon/android-chrome-512x512.png')}}" alt="DGL">

      </div>
      
        
     
          
          
        


     

           
	@endsection

</x-layout>