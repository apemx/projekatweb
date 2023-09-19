<x-app>
    <div class="flex--center-full my-10">
        <form action="{{route('admin.properties.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col text-center">
            @csrf
            <label for="title" >Title:</label>
            <input type="text"  name="title" id="title" class="input" >
            <label for="location_id">Location</label>
            <select name="location_id" id="location_id" class="input" >
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                @endforeach
            </select>
            <label for="price" >Price:</label>
            <input type="number"  name="price" id="price" class="input" >
            <label for="type_id">Type:</label>
            <select name="type_id" id="type_id" class="input" >
                @foreach ($types as $types)
                    <option value="{{ $types->id }}">{{ $types->name }}</option>
                @endforeach
            </select>
            <label for="description" >Description</label>
            <textarea name="description" id="" cols="30" rows="5"></textarea>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="input">
            <div class="flex space-x-3 justify-center my-5">
                <button type="submit" class="btn btn--success">Add</button>
                <button type="reset" class="btn btn--danger">Reset</button>
            </div>
        </form>
    </div>
    </x-app>