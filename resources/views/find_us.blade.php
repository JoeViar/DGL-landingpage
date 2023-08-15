<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  

       
       
        <div class="container-fluid " > 
          <div class="row m-1  justify-content-center" >
            <h2 id="orange_title">Encuentranos </h2>
          </div>  
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
        
          
          
        


     

           
	@endsection

</x-layout>