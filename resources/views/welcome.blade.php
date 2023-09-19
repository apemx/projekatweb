<x-app title="Home">
  
    <div class="flex w-full justify-center ">
        
        <img class="w-full h-Large max-sm:h-medium  " src="{{asset('/img/nekretn.jpg')}}" alt="slika">
    </div>
    <div class="flex--center-y m-4 flex-col text-center ">
        <h1 class="mb-4 text-secondary">Welcome to Our Real Estate Agency!</h1>
        <p class="text-secondary mb-6">We're here to help you find your perfect home.</p>
    </div>
    <div class="flex justify-center items-center flex-col max-h-content text-center">
        <h1 id="offers">Offers</h1>
        <div class="grid grid-cols-3 w-max  h-max justify-center items-center max-md:grid-cols-1 ">
                    @foreach ($properties as $item)
                     <x-card 
                     image="{{ $item->image }}"
                     alt="slika" 
                     class="w-large h-Large max-sm:w-medium h-medium mr-5"
                     title="{{$item->title}}"
                     description="{{$item->description}}"
                     type="{{$item->type->name}}"
                     location="{{$item->location->name}}"
                     price="{{$item->price}}"  
                     /> 
                 @endforeach 
        </div>
        <div class="flex--center-full mt-4 ">
            <x-pagination-bar :paginationData="$properties"/>
        </div>
          
       
    </div>    
    </div>
    </div>
    
</x-app>
