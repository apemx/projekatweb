<x-app title="Request">
    <div class="flex justify-between items-center max-sm:flex-col bg-primary">
        <div class="flex w-full  justify-start items-center pl-5 max-sm:justify-center mt-4  ">
            <h3 class="text-primary max-sm:font-small">Property request</h3>
            <a href="{{route('generate-excel')}}" class="btn btn--warn w-32 max-sm:w-30 m-2 ">Generate Excel</a>
            <a href="{{route('generate-pdf')}}" class="btn btn--warn  w-32 max-sm:w-34 m-2 ">Generate PDF</a>
        </div>
        <div class="flex justify-end items-center m-5 max-sm: mt-4 " >
            <x-search-bar :route="route('agent.property_requests.search')" />
            <div class="flex ml-2 ">
                <a href="{{ route('agent.history_response.index') }}" class="btn btn--edit m-2">History</a>
               
            </div>
        </div>
    </div>
    <x-table-custom
    :data="$users" 
    :columns="[
        'ID' => 'id',
        'Name' => 'user->name',
        'Email'=>'user->email',
        'Message'=>'message',
        'Response'=>'response',
        'Properties'=>'properties->title',
    ]"
    :admin=true
    :editbutton=false
    prefixroute="agent.property_requests"
    /> 
    </div>
</x-app>