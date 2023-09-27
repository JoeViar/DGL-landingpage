<x-layout>
@section('scripts')
		<!-- Some JS and styles -->
	@endsection
	
	@section('content')
  

        <div class="container-fluid p-4  text-white  " id="distributor_discover">   
          <div class="row justify-content-center ">
            <h2 class="text-white">Descubre DGL LATAM</h2>
          </div>
          <div class="row my-5 px-3 justify-content-center  ">
            <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa fa-map-marker" aria-hidden="true" id="distributor_discover_icon"></i> 
                </div>
                <div class="row  justify-content-center ">
                   <h5 >90% de los Distribuidores en México </h5>
                </div>
            </div>
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa fa-shopping-cart" aria-hidden="true" id="distributor_discover_icon"></i> 
                </div>
                <div class="row  justify-content-center ">
                   <h5 >8 Tiendas de Experiencia  </h5>
                </div>
             </div>
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                <i class="fa-solid fa-truck-ramp-box" aria-hiden="true" id="distributor_discover_icon"></i>                </div>
                <div class="row  justify-content-center ">
                   <h5 >4 Centros de Distribución </h5>
                </div>
            </div>             
          </div>
          <div class="row my-5 justify-content-center text-center">
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa-solid fa-microchip" aria-hidden="true" id="distributor_discover_icon"></i> 
                </div>
                <div class="row  justify-content-center ">
                   <h5 > 10 años en la Industria de la Tecnología  </h5>
                </div>
             </div>
             <div class="col mx-3 p-3">
                <div class = "row  justify-content-center ">
                  <i class="fa fa-globe" aria-hidden="true" id="distributor_discover_icon"></i> 
                </div>
                <div class="row  justify-content-center ">
                   <h5 >Red de +19,000 puntos de venta</h5>
                </div>
             </div>

            </div>

         
        </div> 
             
       
        <div class="container-fluid p-5" > 
          <div class="row m-1 p-5  text-center justify-content-center" >
            <h2 id="orange_title">NUESTROS NUMEROS HABLAN </h2>
          </div>  
          <div class="row m-1 h-100 ">
            <div class="col p-1 h-100 text-center ">
              <div class="row justify-content-center">
                <div class="circleBase justify-content-center type1 d-flex">
                <div class="row justify-content-center align-self-center">
                   <h3 class=" numbrer_our_numbers" id="numbrer_our_numbers_1"></h3>
                </div>  

                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">Entregas Diarias </h3>
              </div>
            </div>
            <div class="col p-1  col p-1 h-100 text-center">
            <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                 <div class="row justify-content-center align-self-center">
                    <h3 class=" numbrer_our_numbers"  id="numbrer_our_numbers_2">8400</h3>
                 </div> 
                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">Piezas al Mes </h3>
              </div>
            </div>
            <div class="col p-1  col p-1 h-100 text-center">
              <div class="row justify-content-center">
                <div class="circleBase type1 justify-content-center d-flex">
                <div class="row justify-content-center align-self-center">
                    <h3 class=" numbrer_our_numbers"  id="numbrer_our_numbers_3"></h3>
                 </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <h3 id="orange_title">Entregas en Puntos de Ventas</h3>
              </div>
            </div>

          </div>
        </div>

          <div class="container-fluid p-4 my-2 text-white " id="disteributor_infrastructure">
           <div class="row p-2 my-4  text-center justify-content-center">
             <h2 style="font-size:2 rem;"> Infraestructura</h2>
            
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
              <h3>Diversos puntos de control de</h3>             

            </div>

              
           </div>
            
            

          </div>

       

          <div  class="container-fluid  ">
          <form>
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
                                    <input type="tel" class="form-control"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="inputLastname" placeholder="123456789">
                                </div>
                            </div>
                            <div class="form-group row px-3">
                              <label for="inputFirstname">*Email</label>
                              <input type="text" class="form-control" name="Email" required  placeholder="ejemplpo@ejemplo.com">
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
        const counterElement = document.getElementById("numbrer_our_numbers_1");
        const counterElement2 = document.getElementById("numbrer_our_numbers_2");
        const counterElement3 = document.getElementById("numbrer_our_numbers_3");

        const duration = 200; // Animation duration in milliseconds
        const targetValue1 = 420;
        const targetValue2 = 8400;
        const targetValue3 = 15960;

        const initialValue = 0;
        const increment = 1;
        const increment2 = 10;
        const increment3= 100;
        const interval1 = duration / (targetValue1 - initialValue + 1);
        const interval2 = duration / (targetValue2 - initialValue + 1);
        const interval3 = duration / (targetValue3 - initialValue + 1);

        function animateCounter() {
            let currentValue = initialValue;

            const intervalId = setInterval(() => {
                currentValue += increment;
                counterElement.textContent = currentValue;

                if (currentValue >= targetValue1) {
                    clearInterval(intervalId);
                }
            }, interval1);
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

        
        animateCounter2();
        animateCounter();
        animateCounter3();
</script>
        


     

           
	@endsection

</x-layout>