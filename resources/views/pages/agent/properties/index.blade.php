<x-app title="Properties">
    <div class="flex p-2 items-center max-sm:flex-col">
        <div class="flex w-full  justify-end  pl-5 max-sm:justify-center ">
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
        prefixroute="agent.properties"
        :pagination=true
        /> 
        <div class="flex justify-center mt-5">
            <a href="{{route('agent.properties.create')}}" class="btn btn--edit">Create new properties</a>
        </div>
</x-app>