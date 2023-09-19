<x-app>
   
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Send Request for Property</h1>

        @if(session('success'))
            <div class="bg-green-100 border-primary text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('property_requests.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="property_id" class="pb-4">Select Property:</label>
                <select name="property_id" id="property_id" class="border-primary w-full py-2 px-3">
                    @foreach($properties as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
                @error('property_id')
                    <p class="text-danger text-small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="message" class="block text-secondary font-bold mb-2">Message:</label>
                <textarea name="message" id="message" cols="30" rows="5" class="border rounded w-full py-2 px-3"></textarea>
                @error('message')
                    <p class="text-danger text-small mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn--success">Send request</button>
        </form>

</x-app>