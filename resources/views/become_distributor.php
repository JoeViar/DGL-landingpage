<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  

          <div class="container-fluid">   
            <div class="col-lg-12 grid-margin text-center ">
              <h3 id="orange_title">Nuestros Aliados </h3>
                 
              <div class="owl-carousel">
                <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image"/>
                </div>
                <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image"/>
                </div>
                <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204172/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204663/park-4174278_640.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="http://www.urbanui.com/fily/template/images/carousel/banner_2.jpg" alt="image"/>
                </div>
                 <div class="item">
                    <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1557204140/banner_12.jpg" alt="image"/>
                </div>
              </div>
              </div>
              </div> 
             
       
        <div class="container-fluid  " id="our_history">   
          <div class="row m-1 h-100 ">
            <div class="col p-1 h-100 text-center">
              <h2 id="our_history_title" > Nuestra historia</h2>
            </div>
            <div class="col p-1  col p-1 h-100 text-center">
              <img id="our_history_img"src="{{asset('assets/logos/founders.jpg')}}" alt="">
            </div>
          </div>
        </div>

          <div class="container-fluid d-flex justify-content-center">
            <img id="channels" src="{{asset('assets/logos/channel.png')}}" alt="">
          </div>

       

          <div id="job-offers" class="container-fluid  ">
            <div class="row justify-content-around">
              <img id="job_offers_img" src="{{asset('assets/logos/job_img.png')}}" alt="">
              <h2> Explora nuestras <br/>
OFERTAS LABORALES
</h2>

            </div>
          </div>

         <div class="container-fluid  ">
          <div class="row justify-content-center p-5">
            <h3>BLOG </h3>
          </div>
           
           <div class="row justify-content-center p-5">
          
            <div class="col  text-center">
                <div class="row justify-content-center" id="blog_enty_row">
                  <div id="blog_entry" >
                    <div class="row ">
                      <img id="blog_img" src="{{asset('assets/img/standby.png')}}" alt="">
                    </div>
                    <div class="row justify-content-center">
                      <h4> Titulo </h4>
                      
                    </div>
                    <div class="row justify-content-center">
                      <h5 class="m-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem exercitationem maxime dicta perspiciatis impedit eaque culpa?   </h5>
                      
                    </div>
                    

                  </div>
                </div>
          </div>
            <div id="blog_entry_disp" class="col  text-center">
              <div class="row justify-content-center" id="blog_enty_row">
                  <div id="blog_entry" >
                    <div class="row ">
                      <img id="blog_img" src="{{asset('assets/img/standby.png')}}" alt="">
                    </div>
                    <div class="row justify-content-center">
                      <h4> Titulo </h4>
                      
                    </div>
                    <div class="row justify-content-center">
                      <h5 class="m-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem exercitationem maxime dicta perspiciatis impedit eaque culpa?   </h5>
                      
                    </div>
                   
                  </div>
                  
                </div>
            </div>
          </div>
          
          <div class="row justify-content-center p-5">
            <img src="{{asset('assets/img/favicon/android-chrome-192x192.png')}}" alt="">
          </div>


         

         </div>

         
          
          
        


     

           
	@endsection

</x-layout>