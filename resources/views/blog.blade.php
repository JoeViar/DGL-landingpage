<x-layout>
  @section('scripts')
    <!-- <script src="dist/js/timeline.min.js"></script> -->
    <script>
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})</script>
  @endsection

	@section('content')
  <div class="container-fluid py-4  " id="header_img2" >
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
          <a href="#title">
            <button  id="header_button" type="button"  class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
          </a>
        </div>
      </div>
   </div>
</div>
  <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
          <div class="container P-4">
            <div class="row py-1">
              <img src="{{asset('assets/img/blog_cover.png')}}" alt="" style="heigth: 50px;" class="img-fluid">

            </div>
            <div class="row ">
              <h5>

              </h5>

            </div>
            <div class="row ">
              <p>
                Un recorrido por nuestra celebración del 15 de Septiembre
                Tuvimos la fortuna de conmemorarlo con una explosión de orgullo y cultura mexicana. 💚⚪❤️ Pudimos expresar a todo pulmón nuestro amor por nuestra tierra y nuestras tradiciones 🎉.
                Éste año, nuestras oficinas se llenaron con los colores patrios, compartimos un delicioso buffet con fruta, molletes, chilaquiles, huevo y claro que no podía faltar su respectivo tequilita (un caballito solamente 😜).

              </p>

            </div>
            <div class="row">
              <div class="col p-0">
                <p style="  text-align:start; "><strong>16/09/2023</strong></p>
              </div>
              <div class="col">
                <p style="  text-align:end; "><strong>Blog</strong></p>
              </div>



            </div>

          </div>
      </div>
      <div class="col-md-6">
          {{-- <div class="container P-4">
            <div class="row py-1">
              <img src="{{asset('assets/img/header_background.jpeg')}}" alt="" style="heigth: 50px;" class="img-fluid">

            </div>
            <div class="row ">
              <h5>
                testaaa
              </h5>

            </div>
            <div class="row ">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit delectus quisquam animi quaerat eius voluptates aperiam dolorum nulla obcaecati possimus. Similique dolores tempore sequi optio commodi placeat natus repellendus animi.</p>

            </div>
            <div class="row">
              <div class="col p-0">
                <p style="  text-align:start; "><strong>29/12/2022</strong></p>
              </div>
              <div class="col">
                <p style="  text-align:end; "><strong>Blog</strong></p>
              </div>



            </div>

          </div> --}}
      </div>
      <div class="col-md-6">
          {{-- <div class="container P-4">
            <div class="row py-1">
              <img src="{{asset('assets/img/header_background.jpeg')}}" alt="" style="heigth: 50px;" class="img-fluid">

            </div>
            <div class="row ">
              <h5>
                testaaa
              </h5>

            </div>
            <div class="row ">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit delectus quisquam animi quaerat eius voluptates aperiam dolorum nulla obcaecati possimus. Similique dolores tempore sequi optio commodi placeat natus repellendus animi.</p>

            </div>
            <div class="row">
              <div class="col p-0">
                <p style="  text-align:start; "><strong>29/12/2022</strong></p>
              </div>
              <div class="col">
                <p style="  text-align:end; "><strong>Blog</strong></p>
              </div>



            </div>

          </div> --}}
      </div>
      <div class="col-md-6">
          {{-- <div class="container P-4">
            <div class="row py-1">
              <img src="{{asset('assets/img/header_background.jpeg')}}" alt="" style="heigth: 50px;" class="img-fluid">

            </div>
            <div class="row ">
              <h5>
                testaaa
              </h5>

            </div>
            <div class="row ">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit delectus quisquam animi quaerat eius voluptates aperiam dolorum nulla obcaecati possimus. Similique dolores tempore sequi optio commodi placeat natus repellendus animi.</p>

            </div>
            <div class="row">
              <div class="col p-0">
                <p style="  text-align:start; "><strong>29/12/2022</strong></p>
              </div>
              <div class="col">
                <p style="  text-align:end; "><strong>Blog</strong></p>
              </div>



            </div>

          </div> --}}
      </div>




    </div>

  </div>


















	@endsection

</x-layout>