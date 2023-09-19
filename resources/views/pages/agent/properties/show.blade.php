<x-app title="Properties">
<div class="flex--center-y py-10 flex-col">
    <x-card 
    image="{{ $properties->image }}"
    alt="slika" 
    class="w-Large h-Large max-sm:w-medium h-medium"
    title="{{$properties->title}}"
    description="{{$properties->description}}"
    type="{{$properties->type->name}}"
    location="{{$properties->location->name}}"
    price="{{$properties->price}}"   
    />
</div>

    


</x-app>