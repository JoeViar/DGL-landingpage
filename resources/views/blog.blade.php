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
  <div class="container p-5">
    <div class="row">
      <div class="col-md-6">
          <div class="container P-4">
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

          </div>
      </div>
      <div class="col-md-6">
          <div class="container P-4">
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

          </div>
      </div>
      <div class="col-md-6">
          <div class="container P-4">
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

          </div>
      </div>
      <div class="col-md-6">
          <div class="container P-4">
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

          </div>
      </div>




    </div>

  </div>


















	@endsection

</x-layout>