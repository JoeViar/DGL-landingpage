<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
@endsection

@section('content')
<div class="container-fluid py-4  " id="header_img5" >
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
        <a href="#title">
          {{-- <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button> --}}
        </a>
      </div>
    </div>
 </div> 
</div>

        <div class="container-fluid  ">
          <div class="row justify-content-center  p-5">
            <h3 class="mx-2" id="title_row">ÚNETE A  </h3>
            <img class="mx-2"  id="image_row" src="{{asset('img/assets/logo-big.png')}}" alt="">
          </div>

           <div class="row justify-content-center ">

              <div id="blog_entry_disp" class="col-md-6  text-center">
                <a href="{{route('jobEntry') }}">
                 <div class="row justify-content-center" id="blog_enty_row">
                     <div id="job_entry" >
                       <div class="row ">
                           <img id="blog_img" class="p-4" src={{asset('assets/img/VacanteCategoryJr.png')}} alt="">
                       </div>
                       <div class="row justify-content-center">
                         <h4 class="f-32"> CATERGORY JR </h4>

                       </div>
                       <div class="row justify-content-center">
                         <h5 class="m-5 f-24">  Sus principales funciones es la creación/ajustes/ del nuevo lineal de las marcas más importantes de tecnología.  </h5>

                       </div>

                     </div>
                    </a>

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
                              <input type="text" class="form-control" name="Company" required  placeholder="Nombre Completo">
                            </div>
                            <div class="form-group row px-3">
                              {{-- <label for="inputFirstname">*Asunto</label>
                              <input type="text" class="form-control" name="Company" required  placeholder=""> --}}
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Puesto</label>
                              <input type="text" class="form-control" name="Company" required  placeholder="Puesto de interes">
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





       


	@endsection

</x-layout>