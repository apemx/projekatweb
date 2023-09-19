<x-app >
    <div class="flex--center-full py-10 max-sm:flex-col">
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
    <div class="flex--center-x">
        <x-pagination-bar :paginationData="$properties"/>
    </div>
</x-app>