<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link href="dist/css/timeline.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
 

</head>
<body>
<div  id="base">

    <nav class="navbar navbar-light navbar-expand-md m-0  bg-light" style="background-color: rgba(0,0,0,0.3);">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">BBBOOTSTRAP</a> -->
            <img id="nav_logo" src="{{asset('img/assets/logo-big.png')}}" alt="">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav text-right text-white ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Sobre nosostros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Quiero ser distribuidor</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Encuentranos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Bolsa de trabajo </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Blog</a></li>


                </ul>
                <ul class="nav navbar-nav ml-auto">
                   
                    <img id="user_logo"  src="{{asset('assets/img/user_icon.png')}}" alt=""></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    @php
    $title="";
    $dir=Request::route()->getName()

   
    
     
    @endphp

    <div class="container-fluid " id="header_img" >
    <div class="text-center" >
         
        @if($dir=='index')
            <h1 id="header_title" >Conviértete en distribuidor </h1>

        @else
            @if($dir=='about_us')
                <h1 id="header_title" >Conviértete en distribuidor </h1>
            @else

            @endif

        @endif
       
        <button id="header_button"type="button" class="btn ">Conoce más</button>
    </div>




    </div>

        @yield('content')

   
   
   

    <div class="container-fluid p-4" id=footer>

        <div class="row justify-content-around text-center">
            <div class="col">
                <div class="row justify-content-center">
                    <span id="footer_menu_left" class="text-white">Sobre Nosotros</span>
                                
                </div>
                <div class="row justify-content-center">
                    <span id="footer_menu_left" class="text-white">Se un Distribuidor</span>
                </div>                
            </div>
            <div class="col" > <img id="footer_logo" src="{{asset('assets/logos/LogosPNG/linkedinLogo.png')}}" alt=""></div>
            <div class="col"> 
                <div class="row justify-content-center">
                    <span id="footer_menu_right" class="text-white">Sobre Nosotros</span>
                                
                </div>
                <div class="row justify-content-center">
                    <span id="footer_menu_right" class="text-white">Se un Distribuidor</span>
                </div>       

            </div>

        </div>

    </div>
</div>

@yield('scripts')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script type="module" src="{!! asset('js/app.js') !!}" ></script>
</body>
</html>