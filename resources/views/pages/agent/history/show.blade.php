<x-app title="History properties">
    <div class="container mx-auto mt-8 px-4">
        <div class="border rounded-lg p-6 bg-light shadow-lg">
            <h3 class=" text-info">Request for real estate ID: {{  $propertyRequests->properties->name }}</h3>
            <p>User: {{ $propertyRequests->user->name }}</p>
            <p >Property name: {{ $propertyRequests->properties->title }}</p>
            <p > <h4 class="text-info" > Message: {{ $propertyRequests->message }}</h4></p>
            @if ($propertyRequests->response)
                <h2 class="text-success ">Response: {{ $propertyRequests->response }}</h2>
            @else
                <p class="text-danger">There are currently no responses to this request.</p>
            @endif
        </div>   
</x-app>