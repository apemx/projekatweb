<x-app title="Request">
    <div>
        <div class="flex justify-between items-center max-sm:flex-col bg-primary">
            <div class="flex w-full  justify-start items-center pl-5 max-sm:justify-center mt-4">
                <h3 class="text-primary max-sm:font-medium">Property request</h3>
            </div>
            <div class="flex justify-end items-center m-5 max-sm:flex-col mt-4 " >
                <x-search-bar :route="route('agent.property_requests.search')" />
                <div class="flex ml-2 ">
                    <a href="{{ route('agent.history_response.index') }}" class="btn btn--edit m-2 max-sm:w-small">History</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col m-5">
        <x-table-custom
        :data="$propertyRequests" 
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
        :pagination=true
        /> 
        </div>
    </div>  
</x-app>