<x-app>
    <div class="flex flex-col items-center h-screen " >
    <div class="flex  my-10 flex-col items-center h-full w-full">
        <h2 class="agent-panel-heading">Welcome to Our Platform!</h2>
        <p class=" animated-shimmer mb-8">Explore our latest real estate listings</p>
        <div class="block-dashboard">
            <x-block label="Offers" icon="fa fa-home" class=" bg-info " href="{{ route('user.properties.index')}}"/>
            <x-block label="Property-Request" icon="fa fa-calendar" class="bg-danger" href="{{route('property_requests.create')}}"/>
            <x-block label="All Requests" icon="fa fa-bell" class="bg-warn" href="{{route('property_requests.index')}}"/>    
        </div>
    </div>
    </div>
</x-app>