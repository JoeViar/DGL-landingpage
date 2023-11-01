<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  <div class="container-fluid py-4  " id="header_img2" >
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
          <a href="#title">
            <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
          </a>
        </div>
      </div>
   </div> 
</div>

       

     
        <div class="container-fluid " > 
          <div class="row m-1  justify-content-center" >
            <h2 id="orange_title">Encuéntranos </h2>
          </div>  
          <section name="title">

          <div class="row m-1 h-100 ">
            <div class="col p-1 h-100 text-center ">
              <div class="row justify-content-center">
                <div class="circleBase justify-content-center type1 d-flex">
                <div class="row justify-content-center align-self-center">
                    <i id="find_us_icon" class="fa-solid fa-phone-volume"></i>     
                </div>  

                </div>
              </div>
              <div class="row justify-content-center">
                <h5> 55 2122 8660</h5>
              </div>
            </div>
            <div class="col p-1  col p-1 h-100 text-center">
            <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                 <div class="row justify-content-center align-self-center">
                    <i id="find_us_icon"class="fa-solid fa-map-location-dot"></i>
                 </div> 
                </div>
              </div>
              <div class="row justify-content-center">
                <h5> Presa Salinillas 370, Col. Irrigación, Miguel Hidalgo, 11500 Ciudad de México, CDMX </h5>
              </div>
            </div>
            <div class="col p-1  col p-1 h-100 text-center">
              <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                <div class="row justify-content-center align-self-center">
                    <i id="find_us_icon" class="fa-solid fa-at"></i>
                 </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <h5>atencion@digicellmx.com</h5>
              </div>
            </div>

          </div>
          <div id="form-div">   
              <div id="map"></div>
          </div>
        </div>
        
      </section>
          
          
        


     

           
	@endsection

</x-layout>