<x-app title="Properties">
    
    <p class="flex--center-full font-Large  text-success mt-5"> {{session('success')}}</p>
    <div class="flex--center-full my-10 max-sm:flex-col">

        <div class="flex  w-64 h-64  pr-5 m-0 max-sm:pr-0 mb-2 flex-col">
            <p class="font-large text-center">Image</p>
            <img src="{{ asset('uploads/properties/'.$properties->image ) }}" class="w-full h-full " alt="photo">
        </div>
        <div class="flex  h-full ">
            
            <form  enctype="multipart/form-data" action="{{route('agent.property_requests.store',['id' => $properties->id])}}" method="POST"  class="flex flex-col text-center" >
                @csrf
                @method('PATCH')
                <label for="title" >Title:</label>
                <input type="text"  name="title" id="title" class="input" placeholder="{{ $properties->title }}" >
             
                <label for="location_id">Location</label>
                <select name="location_id" id="location_id" class="input" >
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}"@if($location->id == $properties->location->id )selected  @endif> {{ $location->name }}</option>
                    @endforeach
                </select>
                <label for="price" >Price:</label>
                <input type="number"  name="price" id="price" class="input" placeholder="{{$properties->price}}">
                <label for="type_id">Type:</label>
                <select name="type_id" id="type_id" class="input" >
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}"@if($type->id == $properties->type->id )selected  @endif> {{ $type->name }}</option>
                    @endforeach
                </select>
                <label for="description" >Description</label>
                <textarea name="description" id="" cols="30" rows="5" placeholder="{{$properties->description}}"></textarea>
        
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" class="input">
                
                <div class="flex space-x-3 justify-center my-5">
                    <button type="submit" class="btn btn--edit">Update</button>
                    <button type="reset" class="btn btn--danger">Reset</button>
                </div>
            </form>
        </div>
    </div>

</x-app>