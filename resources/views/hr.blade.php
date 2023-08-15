<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
@endsection

@section('content')
  
<div class="container-fluid  ">
          <div class="row justify-content-center  p-5">
            <h3 id="title_row">ÚNETE A  </h3>
            <img id="image_row" src="{{asset('img/assets/logo-big.png')}}" alt="">
          </div>
           
           <div class="row justify-content-center ">
           <div id="blog_entry_disp" class="col  text-center">
              <div class="row justify-content-center" id="blog_enty_row">
                  <div id="job_entry" >
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
                  <div id="job_entry" >
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
          <form>
            <div class="container py-5" id="form-div">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Nombre</label>
                              <input type="text" class="form-control" name="Company" required  placeholder="Compañía">
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Asunto</label>
                              <input type="text" class="form-control" name="Company" required  placeholder="Compañía">
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Puesto</label>
                              <input type="text" class="form-control" name="Company" required  placeholder="Compañía">
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Adjuntar cv</label>
                              <input type="file" class="form-control" name="Company" required  placeholder="Compañía">
                            </div>
                       
                            
                            <button type="submit" class="btn  px-4 float-right">Enviar</button>
                            <div class="row justify-content-center p-5">
            <img src="{{asset('assets/img/favicon/android-chrome-192x192.png')}}" alt="">
                              </div>

                        </form>
                        </div>
            </div>
          
          
          </div>

          

         

         </div>
         
           
	@endsection

</x-layout>