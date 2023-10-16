<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/a288537ab3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">

</head>
<body>
  <div class="container-fluid colorBlue">
    <div class="row justify-content-end  my-1 ">
      <div class="col-5 p-1 mx-2 align-items-center text-right">
        <h3 style="font-size: calc(19px + .2vw);"  class="text-white">Siguenos en redes sociales </h3>
      </div>
      <div class="col-2  p-1">
        <a href="https://www.linkedin.com/company/dgl-latam/mycompany/" >
          <i id="headerLogo" class="fa-brands fa-linkedin-in fa-xl " ></i>
        </a>
      </div>
    </div>

  </div>
<div  id="base">
  @php
  $title="";
  $dir=Request::route()->getName()

 
  
   
  @endphp

    <nav class="navbar navbar-light navbar-expand-md m-0  bg-light" style="background-color: rgba(0,0,0,0.3);">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">BBBOOTSTRAP</a> -->
       <a id="nav_logo1" href="{{url('/')}}">
              <img id="nav_logo" src="{{asset('img/assets/logo-big.png')}}" alt="">
        </a>
     
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-right text-white ml-auto">
                  @if($dir=='about_us')
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{url('about_us')}}">Sobre nosostros</a></li>
                  @else
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('about_us')}}">Sobre nosostros</a></li>

                  @endif
                  @if($dir=='distributor')
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="{{url('distributor')}}">Quiero ser distribuidor</a></li>

                  @else
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('distributor')}}">Quiero ser distribuidor</a></li>

                  @endif
                  
                  @if($dir=='find_us')
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="{{url('find_us')}}">Encuéntranos</a></li>

                  @else
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('find_us')}}">Encuéntranos</a></li>

                  @endif
                  @if($dir=='hr')
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="{{url('hr')}}">Bolsa de trabajo</a></li>

                  @else
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('hr')}}">Bolsa de trabajo</a></li>

                  @endif

                  @if($dir=='blogDisp')
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="{{url('blogDisp')}}">Blog</a></li>

                  @else
                  <li class="nav-item" role="presentation"><a class="nav-link" href="{{url('blogDisp')}}">Blog</a></li>

                  @endif
                  
                    
                    
                    


                </ul>
                <ul class="nav navbar-nav ml-auto">
                   
                    <!-- <img id="user_logo"  src="{{asset('assets/img/user_icon.png')}}" alt=""></li> -->
                    
                </ul>
            </div>
        </div>
    </nav>
  

    <div class="container-fluid py-4  " id="header_img" >
    <div class="container-fluid" >
      <div class="row ">
        <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">

         
          @if($dir=='index')
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

          @endif
        </div>
      </div>
       <div class="row my-5 p-y5 text-center">
         <div class="col-md-12 mt-5 center-block text-center justify-content-center">
          <button  id="header_button" type="button" class="btn mt-5"><p style="font-size: 1000 px;"> Conoce más</p></button>
        </div>
       </div>
    </div>




    </div>

        @yield('content')

   
   
        
        
   


    <div class="container-fluid p-4" id=footer>

        <div class="row justify-content-center mx-5 px-5 text-center">
            <div class="col-md-2 p-1"> 
                <a href={{url('about_us')}}>
                  <span  class="text-white footer-text">Sobre Nosotros</span>   
                </a>
              </div>
              <div class="col-md-3 p-1">
                <a href={{url('distributor')}}>
                  <span  class="text-white footer-text">Se un Distribuidor</span>
                
                </a>
                
              </div>
                              
           
           
            <div class="col-md-2 p-1"> 
              <a     href={{url('find_us')}}>
                <span  class="text-white footer-text">Encuéntranos</span>
              </a>
                                
            </div>
              <div class="col-md-3 p-1">
                <a   href={{url('hr')}}> >
                  <span  class="text-white footer-text">Bolsa de trabajo</span>
                </a>
               

              </div>
              <div class="col-md-2 p-1">
                <a href={{url('blogDisp')}}>>
                  <span  class="text-white footer-text" >Blog</span>
                </a>
                

              </div>
                    
                   

            

        </div>
        <div class="row justify-content-center my-5 px-5 text-center">
          <div class="col-md-12 py-3">
            <a href="https://www.linkedin.com/company/dgl-latam/mycompany/" >
              <i style="font-size:50px;" class="fa-brands fa-linkedin-in fa-xl text-white " ></i>
            </a>    
          </div>
         
          
  
       
          

        </div>
    
       

      </div>

    </div>
</div>

@yield('scripts')


<script type="text/javascript">

  
    


const colorChangeDivs = document.querySelectorAll(".timeline-body");

window.addEventListener("scroll", () => {
    colorChangeDivs.forEach((div) => {
        const rect = div.getBoundingClientRect();

        // Check if the top of the div is within the viewport
        if (rect.bottom >= 0 && rect.bottom <= window.innerHeight) {
            // Change the background color when it's in view
            // div.style.backgroundColor = "#f0";
            div.style.fontWeight="bold";
            div.style.color="#000";
        } else {
            // Reset the background color when it's out of view
            // div.style.backgroundColor = "white";
            div.style.fontWeight="normal";
            div.style.color="#ccc";


        }
        
    });
});




   

var map;
let marker;
let geocoder;
let responseDiv;
let response;

function initMap() {
    var map;
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 19,
    center: { lat:19.44470634333933, lng: -99.21525594605494 },
    mapTypeControl: false,


  });
  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!",
});
  geocoder = new google.maps.Geocoder();

  const inputText = document.createElement("input");

  inputText.type = "text";
  inputText.placeholder = "Enter a location";

  const submitButton = document.createElement("input");

  submitButton.type = "button";
  submitButton.value = "Geocode";
  submitButton.classList.add("button", "button-primary");

  const clearButton = document.createElement("input");

  clearButton.type = "button";
  clearButton.value = "Clear";
  clearButton.classList.add("button", "button-secondary");
  response = document.createElement("pre");
  response.id = "response";
  response.innerText = "";
  responseDiv = document.createElement("div");
  responseDiv.id = "response-container";
  responseDiv.appendChild(response);

  const instructionsElement = document.createElement("p");

  instructionsElement.id = "instructions";
  instructionsElement.innerHTML =
    "<strong>Instructions</strong>: Enter an address in the textbox to geocode or click on the map to reverse geocode.";
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(
    instructionsElement
  );
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);

  map.addListener("click", (e) => {
    geocode({ location: e.latLng });
  });
  submitButton.addEventListener("click", () =>
    geocode({ address: inputText.value })
  );
  clearButton.addEventListener("click", () => {
    clear();
  });
  clear();
}

function clear() {
  marker.setMap(null);
}

function geocode(request) {
  clear();
  geocoder
    .geocode(request)
    .then((result) => {
      const { results } = result;

      map.setCenter(results[0].geometry.location);
      marker.setPosition(results[0].geometry.location);
      marker.setMap(map);
      response.innerText = JSON.stringify(result, null, 2);
      return results;
    })
    .catch((e) => {
      alert("Geocode was not successful for the following reason: " + e);
    });
}

window.initMap = initMap;

    </script>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
        </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script type="module" src="{!! asset('js/app.js') !!}" ></script>
</body>
</html>