<x-app title="users">
    <div class="flex justify-center">
    <div class="flex justify-center my-5 flex-col">
        <table class="max-w-full border-collapse border-2 bg-light border-solid max-sm:text-xs text-center text-primary">
            <thead class="bg-primary">
                <tr>
                    <th class="text-center" colspan="5">All users</th>
                </tr>
                <tr>
                    <td class="table--border">Email</td>
                    <td class="table--border" colspan="4">Actions</td>
                </tr>
            </thead>
            <tbody class=" text-secondary">
                
                @foreach ($users as $user)
                <tr>
                    <td class="table--border">{{ $user->email }}</td>
                    <td class="table--border">
                        <x-modal-edit 
                            value="Edit" 
                            id="edit.{{$user->id}}" 
                            class="btn--edit" 
                            route="{{route('users.update', ['id' => $user->id])}}" 
                            label="Editing users:'{{$user->name}}'"
                        >
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-col">
                                <x-input-field name="name" type="text" label="name" :isRequired="true"/>
                                <x-input-field name="email" type="email" label="email" :isRequired="true"/>
                                <x-input-field name="password" type="password" label="password" />
                            
                            
                                <label for="password_confirmation">Confirmed password:</label>
                                <input type="password" id="password_confirmation" name="password_confirmation">
                            </div>
                            <button class="btn btn--success"type="submit">Update user</button>
                        </x-modal-edit>
                    </td>
                    <td class="table--border">
                        <x-modal-edit value="View" id="view.{{$user->id}}" class="btn--success" label="User:'{{$user->name}}' ">
                            <div>
                                <h3>Id:{{$user->id}}</h3>
                                <h3>Name:{{$user->name}}</h3>
                                <h3>Email:{{$user->email}}</h3>
                                <h3>Contact:{{$user->contact}}</h3>
                                <h3>Role:{{$user->getRoleNames()}}</h3>
                            </div>
                        </x-modal-edit>
                    </td>
                    <td class="table--border">
                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn--danger">Delete</button>
                        </form>
                    </td>
                    <td class="table--border"> 
                        <x-modal-edit route="{{route('admin.assignRole', $user)}}" 
                                        id="role.{{$user->id}}" 
                                        value="Role" 
                                        class="btn--warn"
                                        label="{{$user->email}}"
                        >
                            @csrf
                            <select class="input" name="role" id="role">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"@if ($user->hasRole($role->name)) selected @endif>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn--success">Assign</button>
                        </x-modal-edit>       
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <div class="flex justify-center my-3">
        <x-modal-edit class="btn--success" id="add"  route="{{route('admin.adduser')}}" value="Add new user" label="New user">
            @csrf
            <label for="name" >Name</label>
            <input type="text"  name="name" id="name" class="input" >
            <label for="email" >Email</label>
            <input type="email" name="email" id="email"class="input" >
            <label for="password">Lozinka</label>
            <input type="password" name="password" id="password" required class="input" >
            <label for="password_confirmation">Potvrdi lozinku</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="input" >
            <label for="contact" >Phone number</label>
            <input type="tel" name="contact" id="contact" class="input" >
            <label for="role">Role</label>
            <select name="role" id="role" class="input" >
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <div class="flex space-x-3 justify-center">
                <button type="submit" class="btn btn--success">Add</button>
                <button type="reset" class="btn btn--danger">Reset</button>
            </div>
        </x-modal-edit>
    </div>
    </div>
</div>

</x-app>