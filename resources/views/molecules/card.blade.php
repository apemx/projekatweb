<div {{ $attributes->merge(['class' => 'bg-light shadow-lg rounded-lg overflow-hidden text-secondary']) }}>
    <img src="{{ asset('uploads/properties/'.$image) }}" alt="{{ $alt }}" class="w-full h-3/5 ">
    <div >
        <div class="flex w-full bg-light shadow-lg p-2 ">
            <div class="flex w-full item-center justify-center "><p class="text-center"><em>{{ $title }}</em></p></div>
            <div class="flex justify-end"> <a href="{{route('property_requests.create')}}" class="btn btn--success w-32 ">Review request</a></div>
        </div>
        <div class=" font-smaller p-2">
            <p><em>{{ $description }}</em></p>
            <div >
                <div class="flex justify-between">
                    <div>Type: {{ $type }}</div>
                    <div>Location: {{ $location }}</div>
                </div>
            </div>
            <div class="mt-2 text-right">
                <h4>Price: {{ $price }}</h4>
            </div>
        </div>
        {{$slot}}
    </div>
</div>
