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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex justify-center">
                <table class="table-auto">
                  <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                  </tr>
                  @forelse($blogs as $blog=>$item)
                  <tr>
                    <td>{{$item->title}} </td>
                    <td>{{$item->description}}</td>
                    @forelse($users as $user => $)

                    @empty
                    @endforelse
                    <td>{{$users['0']->name}}</td>
                    <td>{{$item->author }}</td>
                  </tr>
                
                  @empty
                  Todavía no    
           
                  @endforelse
                </table>


                  
            </div>
        </div>
    </div>
</x-app-layout>
