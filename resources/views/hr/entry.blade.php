<x-layout-entry>
    @section('scripts')
      <script src="dist/js/timeline.min.js"></script>
    @endsection
      
      @section('content')
  
  
      
             
               
         
       <div id="footer" class="container-fluid">
            <div class="row">
                <div  class="col-md-12 text-center text-white">
                    <h2>Sé parte de nuestro equipo </h2>
                
                

                </div>

            </div>
       
        </div>
        <div class="container my-3">
            <div class="row">
                <div class="col-md-12">
                    <h2> Incorporate al equipo de DGL  </h2>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Sé parte de nuestro equipo y abajo: Nuestra misión es contribuir al progreso de las personas y las empresas. 
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
   <div id="footer" class="container-fluid">
    <div class="row">
        <div  class="col-md-12 text-center text-white">
            <h2>Category Jr</h2>
        
        
        
        </div>
    
    </div>

</div>
<div class="container my-3">
    {{-- <div class="row">
        <div class="col-md-12">
            <h2>Incorporate al equipo de DGL</h2>
        </div>

    </div> --}}
    <div class="row">
        <div class="col-md-12">
            <p>
                Sus principales funciones es la creación/ajustes/ del nuevo lineal de las marcas más importantes de tecnología.
            </p>
        </div>

    </div>
    <div class="row text-center">
        <div class="col-md-12 p-5">
           <img class="job-entry-img" src="{{asset('assets/img/CategoryJr.png')}}" alt="">
        </div>

    </div>

    

</div>
  
           
           
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
                  
                  <input type="hidden" class="form-control" name="Company" >
                </div>
                <div class="form-group row px-3">
                  <label for="inputFirstname">*Adjuntar cv</label>
                  <input type="file" class="form-control" name="Company" required  placeholder="Compañía">
                </div>
           
                
                <button type="submit" class="btn  px-4 float-right">Enviar</button>
   
            </form>
       </div>
       </div>
       </div>
           
            
            
          
  
  
       
  
             
      @endsection
  
  </x-layout-entry>