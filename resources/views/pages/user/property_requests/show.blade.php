<x-app>
        <div class="flex flex-col m-4  bg-light border-primary p-6">
            <h2 class="text-info">Request for real estate :</h2>
            <p >Property name: {{ $propertyRequests->properties->title }}</p>
            <p >Message: {{ $propertyRequests->message }}</p>
    
            @if ($propertyRequests->response)
                <h4 class="mt-4 mb-2 text-secondary">Response:</h4>
                <p><h3  class="text-success ">{{ $propertyRequests->response }}</h3></p>
            @else
                <p class="text-danger">There are currently no responses to this request.</p>
            @endif
        </div>
        
      
</div>
</x-app>