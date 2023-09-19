<x-app title="Location">
    
    <div class="flex--center-full flex-col ">
    <table class="border text-center my-5 bg-light">
        <th colspan="4" class="bg-primary text-primary" >
            Location
        </th>
    @foreach($locations as $location)
        <tr >
            <td class="table--border">
                {{$location->id}}
            </td>
            <td class="table--border">
                {{$location->name}}
            </td>
            <td class="table--border">
                <x-modal-edit 
                    value="Edit" 
                    id="edit.{{$location->id}}" 
                    class="btn--edit" 
                    route="{{route('locations.update', ['id' => $location->id])}}" 
                    label="Editing Location:'{{$location->name}}'"
                >
                    @csrf
                    @method('PATCH')
                    <div class="flex flex-col">
                        
                        <label for="name">Name:</label>
                        <input type="text" class="input" name="name" id="name" placeholder="{{$location->name}}">
                    </div>
                    <button class="btn btn--success"type="submit">Update location</button>
                </x-modal-edit>
            </td>
            <td class="table--border">
                <form action="{{ route('locations.destroy', $location) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn--danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<x-modal-edit class="btn--success" 
route="{{route('locations.store')}}" id="location" label="New location" value="Add location">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <input type="submit" class="btn btn--success" value="add">
</x-modal-edit>

 </div>
</x-app>