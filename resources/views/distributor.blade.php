<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  @if(session()->has('msg'))
        <div>
          <span>
            Hemos recibido tu correo, espera unos minutos y uno de nuestros colaboradores se comunicará con usted
          </span>
        </div>
    @endif

    <div class="container-fluid py-4  " id="header_img3" >
    <div class="container-fluid" >
     <div class="row ">
      <div class="col-md-12 mt-5 mx-0  p-5 center-block text-center">
        <h1 class="" id="header_title" >Únete a la familia  </h1>

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
      <section id="title">

        <div class="container-fluid p-4  text-white  " id="distributor_discover">   
          <div class="row justify-content-center ">
            <h2 class="text-white">DESCÚBRENOS</h2>
          </div>
          <div class="row my-5 px-3 justify-content-center  ">
            <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa fa-map-marker" aria-hidden="true" id="distributor_discover_icon"></i> 
                </div>
                <div class="row text-center justify-content-center ">
                   <h5 >90% de los Retailers </h5>
                </div>
            </div>
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa-solid fa-brain " aria-hidden="true" id="distributor_discover_icon"></i>
                  {{-- <i class="fa fa-shopping-cart" aria-hidden="true" id="distributor_discover_icon"></i>  --}}
                </div>
                <div class="row  text-center  justify-content-center ">
                   <h5 >15 años en la Industria de Tecnología  </h5>
                </div>
             </div>
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  {{-- <i class="fa-solid fa-brain"></i> --}}
                  <i class="fa-solid fa-truck-ramp-box" aria-hiden="true" id="distributor_discover_icon"></i>                </div>
                <div class="row  text-center  justify-content-center ">
                   <h5 >4 Centros de Distribución </h5>
                </div>
            </div>   
            <div class="col mx-3 p-3">
              <div class = "row  justify-content-center ">
              <i class="fa-solid fa-wrench" aria-hiden="true" id="distributor_discover_icon"></i>                </div>
              <div class="row  text-center justify-content-center ">
                 <h5 >Talleres de garantias Reparaciones y soporte técnico </h5>
              </div>
          </div> 
          <div class="col mx-3 p-3">
            <div class = "row  justify-content-center ">
              <i class="fa-solid fa-globe" aria-hiden="true" id="distributor_discover_icon"></i>                </div>
            <div class="row  text-center  justify-content-center ">
               <h5 >Red de +19,000 puntos de Venta </h5>
            </div>
        </div>           
          </div>
          
      </section>
             
       
        <div class="container-fluid p-5 milestones" > 
          <div class="row m-1 p-5  text-center justify-content-center" >
            <h2 id="orange_title">DEJA QUE LOS NUMEROS HABLEN POR NOSOTROS  </h2>
          </div>  
          <div class="row m-1 h-100 ">
            <div class="col p-1 m-1 h-100 text-center ">
              <div class="row justify-content-center">
                <div class="circleBase justify-content-center type1 d-flex">
                  
                <div class="row justify-content-center align-self-center">
                   <h3 class="numbrer_our_numbers mx-2">+ </h3> <h3 class=" numbrer_our_numbers" id="numbrer_our_numbers_1">2000</h3>
                </div>  

                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">Entregas unitarias diarias </h3>
              </div>
            </div>
            <div class="col p-1 m-1  col p-1 h-100 text-center">
            <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                 <div class="row justify-content-center align-self-center">
                  <h3 class="numbrer_our_numbers mx-2">+ </h3> <h3 class=" numbrer_our_numbers"  id="numbrer_our_numbers_2">8400</h3>
                 </div> 
                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">Entregas totales mensuales </h3>
              </div>
            </div>
            <div class="col p-1 m-1 col p-1 h-100 text-center">
              <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                <div class="row justify-content-center align-self-center">
                  <h3 class="numbrer_our_numbers mx-5">Casi</h3>  <h3 class=" numbrer_our_numbers"  id="numbrer_our_numbers_3">16000</h3>
                 </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">  Pcs entregadas por año</h3>
              </div>
            </div>

          </div>
        </div>

          <div class="container-fluid p-4 my-2 text-white " id="disteributor_infrastructure">
           <div class="row p-2 my-4  text-center justify-content-center">
             <h2 class="mb-5" style="font-size: 3rem; font-weight:bold;"> Infraestructura</h2>
            
           </div>
           <div class="row p-2 my-3 justify-content-center text-center">
            <div class="col ">
                <i id="icon_infrastructure" class="fa-solid fa-truck"></i> 
                <h3> Entrega en 48 Horas</h3>             
            </div>
            <div class="col">
                <i id="icon_infrastructure" class="fa-solid fa-file-signature"></i>
                <h3>Garantía directa de 6 meses o reemplazo del producto </h3>             

            </div>
            <div class="col">
              <i id="icon_infrastructure" class="fa-solid fa-headset"></i>             
              <h3>Asistencia directa </h3>             

            </div>
            <div class="col">
              <i id="icon_infrastructure" class="fa-solid fa-award"></i>              
              <h3>Diversos puntos de control de Calidad</h3>             

            </div>
            {{-- <div class="col">
              <i id="icon_infrastructure" class="fa-solid fa-screwdriver-wrench"></i>           
              <h3>Fabricación y diseño IN HOUSE de módulos/ muebles/ displays/ empaques de producto, material POP.</h3>             

            </div>
            <div class="col">
              <i id="icon_infrastructure" class="fa-solid fa-comments-dollar"></i>
              <h3>Fuerza de ventas, promotoria, last mile, fullfilment, call center.</h3>             

            </div> --}}

              
           </div>
           <div class="row text-center">
            <div class="col ">
              {{-- <i id="icon_infrastructure" class="fa-solid fa-award"></i>    --}}
              <i id="icon_infrastructure" class="fa-solid fa-screwdriver-wrench"></i>           
              <h3>Fabricación y diseño IN HOUSE de módulos/ muebles/ <br> displays/ empaques de producto, material POP.</h3>             

            </div>
            <div class="col">
              {{-- <i id="icon_infrastructure" class="fa-solid fa-award"></i>    --}}
              <i id="icon_infrastructure" class="fa-solid fa-comments-dollar"></i>
              <h3>Fuerza de ventas, promotoria, last mile, fullfilment, call center.</h3>             

            </div>

           </div>
            
            

          </div>

       

          <div  class="container-fluid  ">
          <form method="POST"  action="{{ route('distribuitorContact') }}">
          @csrf
            <div class="container py-5" id="form-div">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Compañia</label>
                              <input type="text" class="form-control" name="Company" required  placeholder="Compañía">
                            </div>
                       
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <label for="inputFirstname">*Nombre</label>
                                    <input type="text" class="form-control"  required placeholder="Nombre completo">
                                </div>
                                <div class="col-sm-4">
                                    <label for="inputLastname">*Teléfono</label>
                                    <input type="tel" class="form-control"   id="inputLastname" placeholder="123456789">
                                </div>
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Email</label>
                              <input type="email" class="form-control" name="Email" required  placeholder="ejemplpo@ejemplo.com">
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Categoria</label>
                                <select name="cars" class="form-control" id="cars" >
                                  <option value="celulares">Celulares</option>
                                  <option value="consolas">Consolas </option>
                                  <option value="conputadoras">Computadoras</option>
                                  <option value="wearable">Wearable</option>
                                  <option value="audio">Audio </option>

                                </select>
                            </div>
                           
                            <div class="form-group row px-3">
                              <label for="inputFirstname">Link de la empresa </label>
                              <input type="text" class="form-control" name="Company_link" required  placeholder="www.ejemplo.com">
                            </div> 
                            <button type="submit" class="btn  px-4 float-right">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
          
          
          </div>

      
         
          
          <script type="text/javascript">
          let cont=0;
            const counterElement = document.getElementById("numbrer_our_numbers_1");
            const counterElement2 = document.getElementById("numbrer_our_numbers_2");
            const counterElement3 = document.getElementById("numbrer_our_numbers_3");
    
            const duration = 200; // Animation duration in milliseconds
            const duration1 = 200; // Animation duration in milliseconds

            const targetValue1 = 2000;
            const targetValue2 = 50000;
            const targetValue3 = 1000000;
    
            const initialValue = 0;
            const increment =20;
            const increment2 = 200;
            const increment3= 5000;
            const interval1 = duration / (targetValue1 - initialValue + 1);
            const interval2 = duration / (targetValue2 - initialValue + 1);
            const interval3 = duration1 / (targetValue3 - initialValue + 1);
    
            function animateCounter() {
                let currentValue = initialValue;
    
                const intervalId = setInterval(() => {
                    currentValue += increment;
                    counterElement.textContent = currentValue;
    
                    if (currentValue >= targetValue1) {
                        clearInterval(intervalId);
                    }
                }, interval1);
                 cont=1;
            }
            function animateCounter2() {
                let currentValue = initialValue;
    
                const intervalId = setInterval(() => {
                    currentValue += increment2;
                    counterElement2.textContent = currentValue;
    
                    if (currentValue >= targetValue2) {
                        clearInterval(intervalId);
                    }
                }, interval2);
            }
            function animateCounter3() {
                let currentValue = initialValue;
    
                const intervalId = setInterval(() => {
                    currentValue += increment3;
                    counterElement3.textContent = currentValue;
    
                    if (currentValue >= targetValue3) {
                        clearInterval(intervalId);
                    }
                }, interval3);
            }
  
const colorChangeDivs = document.querySelectorAll(".milestones");
 
  window.addEventListener("scroll", () => {
    colorChangeDivs.forEach((div) => {
        const rect = div.getBoundingClientRect();
        
            
        if (rect.bottom >= 0 && rect.bottom <= window.innerHeight) {
          
            if(cont==0){
              animateCounter();
              animateCounter2();
              animateCounter3(); 
            }
            
            
        } else {
          

        }
        
    });
  });
           
    </script>
        


     

           
	@endsection

</x-layout>