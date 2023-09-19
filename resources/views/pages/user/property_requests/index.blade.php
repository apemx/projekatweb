<x-app>  
        <div class="container mx-auto p-4">
            <h2 class="text-secondary  mb-4">List of requests for real estate</h2>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <x-table-custom
            :data="$propertyRequests" 
            :columns="[
                'ID' => 'id',
                'title' => 'properties->title',
                'message'=>'message',
                'response'=>'response'
            ]"
            :admin=true
            :editbutton=false
            prefixroute="property_requests"
            :pagination=false
            />      
</x-app>