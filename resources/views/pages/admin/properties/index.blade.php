<x-app title="Properties">
    <div class="flex p-2 items-center max-sm:flex-col">
        <div class="flex w-full  justify-end space-x-4   max-sm:justify-center ">
            <a href="{{route('generate-excel')}}" class="btn btn--success w-32 max-sm:w-30  ">Generate Excel</a>
            <a href="{{route('generate-pdf')}}" class="btn btn--danger  w-32 max-sm:w-34  ">Generate PDF</a>
        </div>
    </div>
        <x-table-custom
        :data="$properties" 
        :columns="[
            'ID' => 'id',
            'title' => 'title',
            'description'=>'description',
            'location'=>'location->name',
            'type'=>'type->name'
        ]"
        :admin=true
        :editbutton=true
        prefixroute="admin.properties"
        :pagination=true
        /> 
        <div class="flex justify-center mt-5">
            <a href="{{route('admin.properties.create')}}" class="btn btn--edit">Create new properties</a>
        </div>
</x-app>