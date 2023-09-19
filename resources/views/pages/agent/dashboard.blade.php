<x-app title="Agent dashboard"> 
    <div class="flex flex-col items-center my-10">
        <div class="text-center mb-6">
            <h2 class="agent-panel-heading text-edit">Welcome to agent panel</h2>
            <p>Explore your real estate listings, manage clients, and more.</p>
        </div>
        <div class="flex justify-center items-center ">
        </div>
        <div class="grid grid-cols-3 w-max  h-24 justify-center max-sm:grid-cols-1">
            <x-block label="Properties" icon="fa fa-home" class=" bg-info" href="{{route('agent.properties.index')}}"/>
            <x-block label="Property-Request" icon="fa fa-suitcase" class="bg-success" href="{{route('agent.property_requests.index')}}"/>
            <x-block label="History response" icon="fa fa-envelope" class="bg-danger" href="{{route('agent.history_response.index')}}"/>
        </div>
        </div>
    
</x-app>