<x-app title="Type">
 
    <div class="flex--center-full flex-col ">
        <table class="border text-center my-5 p-4  bg-light">
            <th colspan="4" class="bg-primary text-primary" >
                Type
            </th>
        @foreach($types as $item)
            <tr>
                <td class="table--border ">
                    {{$item->id}}
                </td>
                <td class="table--border">
                    {{$item->name}}
    
                </td>
                <td class="table--border">
                    <x-modal-edit 
                        value="Edit" 
                        id="edit.{{$item->id}}" 
                        class="btn--edit" 
                        route="{{route('type.update', ['id' => $item->id])}}" 
                        label="Editing Type:'{{$item->name}}'"
                    >
                        @csrf
                        @method('PATCH')
                        <div class="flex flex-col">
                            <x-input-field type="text" name="name" placeholder="{{$item->name}}" label="name" />
                        </div>
                        <button class="btn btn--success"type="submit">Update location</button>
                    </x-modal-edit>
                </td>
                <td class="table--border">
                    <form action="{{ route('type.destroy', $item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn--danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <x-modal-edit class="btn--success" 
    route="{{route('type.store')}}" id="types" label="New location" value="Add location">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <input type="submit" class="btn btn--success" value="add">
    </x-modal-edit>
    
     </div>

</x-app>