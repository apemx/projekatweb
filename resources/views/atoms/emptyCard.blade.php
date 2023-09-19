
<div class="flex flex-col my-3 h-max-content md:hidden ">
    <div class="bg-white space-y-3  rounded-lg shadow">
        <div class="flex flex-col">
            <div class="text-center p-0 flex-col rounded-t-md flex-start bg-primary ">
                <h4>{{$header}}</h4>
            </div>
            <div class="flex w-full">
                {{$slot}}
            </div>
            
        </div>
    </div>
</div>