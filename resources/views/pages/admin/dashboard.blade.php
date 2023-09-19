<x-app title="Admin dashboard">
    <div class="flex justify-center my-10">
        <div class="grid grid-cols-2 w-max  h-24 justify-center max-sm:grid-cols-2 ">
            <x-block label="Users" icon="fa fa-user-circle" class=" bg-danger " href="{{route('users.index')}}"/>
            <x-block label="Location" icon="fa fa-map-marker" class="bg-success" href="{{route('locations.index')}}"/>
            <x-block label="Type" icon="fa fa-square" class=" bg-info" href="{{route('type.index')}}"/>
            <x-block label="Properties" icon="fa fa-home" class=" bg-warn" href="{{route('admin.properties.index')}}"/>
        </div>
    </div>
</x-app>