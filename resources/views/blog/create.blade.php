<x-app-layout>
    <x-slot name="header">
        <a href="{{route('blog.create')}}"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crea un nuevo blog') }}
        </h2>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{route('blog.store')}}"  class="w-full max-w-lg" method="post">
                    @csrf
                    <div class="grid grid-rows-10 grid-flow-col gap-4 ">
                        <div class="flex flex-wrap -mx-3 mb-6">
                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                              Title
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="title" type="text" placeholder="">
                            
                          </div>
                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                              Description
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  name="description" type="text" placeholder="">
                            
                          </div>
                          <!-- <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                              Last Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="body" id="grid-last-name" type="text" placeholder="Doe">
                          </div> -->
                        </div>
                       
                        
                        
                    
                        <textarea  rows="50" id="blogTextArea" name="body" ></textarea>
                       
                         
                          
                       
                        
                 
                    <button class="blog_button"  type="submit">Submit</button>

                    
                </form>    
            

                  
            </div>
        </div>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
</x-app-layout>
