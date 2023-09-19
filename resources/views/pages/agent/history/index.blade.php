<x-app title="History properties">
    <div>
        <div class="flex justify-between items-center agent-panel-heading max-sm:flex-col bg-primary ">
            <div class="flex w-full  justify-start items-center pl-5 max-sm:justify-center max-sm:mt-4">
                <h3 class="text-primary max-sm:font-medium">History Property Request</h3>
            </div>
            <div class="flex justify-end items-center m-5 max-sm:flex-col mt-4 " >
                <x-search-bar :route="route('agent.property_requests.search')" />
                <div class="flex ml-2 ">
                    <a href="{{ route('agent.property_requests.index') }}" class="btn btn--edit m-2 max-sm:w-small">Inbox</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col m-5">
            <x-table-custom
            :data="$propertyRequests" 
            :columns="[
                'ID' => 'id',
                'Name' => 'user->name',
                'Message'=>'message',
                'Response'=>'response',
                'Properties'=>'properties->title',
            ]"
            :admin=true
            :editbutton=false
            prefixroute="agent.history_response"
            :pagination=true
            /> 
        </div>
    </div> 
</x-app>