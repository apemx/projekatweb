<x-app title="Request">
    <div class="container mx-auto mt-8 px-4">
        <div class="border rounded-lg p-6 bg-light shadow-lg">
            <h1 class="text-2xl font-bold mb-2 text-secondary">Request for real estate ID: {{  $propertyRequests->properties->name }}</h1>
            <p >User: {{ $propertyRequests->user->name }}</p>
            <p >Property name: {{ $propertyRequests->properties->name }}</p>
            <p >Message: {{ $propertyRequests->message }}</p>
    
            @if ($propertyRequests->response)
                <h2 class="text-xl font-bold mt-4 mb-2 text-primary">Odgovor na zahtev:</h2>
                <p class="text-secondary">{{ $propertyRequests->response }}</p>
            @else
                <p class="text-danger">There are currently no responses to this request.</p>
            @endif
        </div>
        
        <form action="{{ route('agent.property_requests.store', $propertyRequests->id) }}" method="POST" class="mt-2">
            @csrf
            <div class="mb-4">
                <label for="response" class="text-primary">Odgovor</label>
                <textarea class="border rounded-lg w-full p-2" id="response" name="response" rows="2" placeholder="Your response to the request"></textarea>
            </div>
            <button type="submit" class="btn btn--success">Reply</button>
        </form>
        
        
</x-app>
