<x-layout-entry>
  @section('scripts')
    <script src="dist/js/timeline.min.js"></script>
  @endsection

    @section('content')
<div>


    <div class="container-fluid py-4  " id="image_blog" >
        <div class="container-fluid" >
         <div class="row ">
          <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
            <h1 class="" id="blog_entry_title" >    
                Un recorrido por nuestra celebración del 15 de Septiembre 
            </h1>
    
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
       </div>
      
</div>


    <div class="container my-3 p-3">
          {{-- <div class="row">
              <div class="col-md-12">
                  <h2> Incorporate al equipo de DGL  </h2>
              </div>

          </div> --}}
          <div class="row">
              <div class="col-md-12">
                  <p class="text-justify">
                    Tuvimos la fortuna de conmemorarlo con una explosión de orgullo y cultura mexicana. 💚⚪❤️ Pudimos expresar a todo pulmón nuestro amor por nuestra tierra y nuestras tradiciones 🎉.
                    Éste año, nuestras oficinas se llenaron con los colores patrios, compartimos un delicioso buffet con fruta, molletes, chilaquiles, huevo y claro que no podía faltar su respectivo tequilita (un caballito solamente 😜).

                   </p>
                   <div class=" row justify-content-around m-2 ">
                    <img src="{{asset('assets/img/blog_id.jpg')}}" alt="" style="width:40%;" class="m-1">
                    <img src="{{asset('assets/img/blog_cover.png')}}" alt="" style="width:40%" class="m-1">
 
                   </div>
                   <p class="text-justify">
                        Este evento se ha convertido en una tradición en nuestra empresa que nos inspira y une mientras avanzamos hacia el futuro. Y no podemos olvidar que hubo 2 premios para los mejores vestidos (un hombre y una mujer), ambos ganaron un Amazfit GTS 2.                                             
                        *Adjuntar foto aquí*
                        Entra a este link para ver nuestro video 👉🏻 <a href="https://bit.ly/3rRSMFl">https://bit.ly/3rRSMFl</a>
                   </p>
              </div>

          </div>

     </div>

     {{-- <div id="footer" class="container-fluid">
      <div class="row">
          <div  class="col-md-12 text-center text-white">
              <h2> Información de ka  en DGL Latam</h2>



          </div>

      </div>

  </div> --}}
  {{-- <div class="container my-3">
      <div class="row">
          <div class="col-md-12">
              <h2> Info de la empresa </h2>
          </div>

      </div>
      <div class="row">
          <div class="col-md-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, voluptatum architecto. Odio ea at reprehenderit culpa animi, dolores soluta quae quisquam fuga ipsa saepe? Nihil enim atque temporibus molestias delectus.</p>
          </div>

      </div>

 </div>
    --}}

<div class="container my-3">
  {{-- <div class="row">
      <div class="col-md-12">
          <h2>Incorporate al equipo de DGL</h2>
      </div>

  </div> --}}
 



</div>











    @endsection

</x-layout-entry>