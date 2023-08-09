<x-layout>
  @section('scripts')
    <script src="dist/js/timeline.min.js"></script>
  @endsection
	
	@section('content')
  

    
           
             
       
        <div class="container-fluid  " id="about_us_our_history">   
          <div class="row m-1 h-100 ">
            <div class="col p-5 m-2  h-100 text-center justify-content-center">
              <div class="row my-2 p-3 w-75 ">
                <h2 class="ml-5  text-white"> Nuestra historia</h2>                  
              </div>
              <div class="row p-3 w-75">
                <p class="ml-5  text-white text-justify"> Contenido: Somos una empresa de distribución y desarrollo de canales de venta que representa a fabricantes y desarrolladores mundiales de tecnología como gadgets, teléfonos móviles, etc.</p>
              </div>
            </div>
            <div class="col p-1 h-100 text-center">
              <!-- <img id="our_history_img"src="{{asset('assets/logos/founders.jpg')}}" alt=""> -->
            </div>
          </div>
        </div>

          <div class="container-fluid d-flex justify-content-center">
           
             <h1 class="text-danger">timeline on standBy</h1>
         
   
          </div>

       

          <div  class="container  ">
            
            <div class="row text-center justify-content-center">
              <img id="coworkers_img" src="{{asset('assets/img/Coworkers.png')}}" alt="">

            </div>
          </div>

         
         

     
         
          
          
        


     

           
	@endsection

</x-layout>