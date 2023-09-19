@props(['data', 'columns','admin'=>false ,'prefixroute','editbutton'=>false,'pagination'=>false,])

<div class=" max-md:hidden">
    <table class="min-w-full bg-white border-primary mb-5 ">
        <thead>
            <tr>
                @foreach($columns as $label => $attribute)
                    <th class="p-3 text-sm border-b font-semibold tracking-wide text-left">{{ $label }}</th>
                @endforeach
                <th class="p-3 text-sm border-b font-semibold tracking-wide text-center" colspan="4">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @foreach($data as $item)
                <tr>
                    @foreach($columns as $label => $attribute)
                        <td class="py-2 px-4 border-b">
                            @if (isset($item->{$attribute}))
                                {{ $item->{$attribute} }}
                            @else
                                @php
                                    $accessors = explode('->', $attribute);
                                    $value = $item;
                                    foreach ($accessors as $accessor) {
                                        $value = $value->{$accessor};
                                    }
                                @endphp
                                {{ $value }}
                            @endif
                        </td>
                        {{ $slot }}
                    @endforeach
                    @if($admin)
                    <td class="p-0 m-1 whitespace-nowrap w-20">
                        <a href="{{ route($prefixroute.'.show', $item->id) }}"  class="btn btn--success m-1 w-16">View</a> 
                      
                    </td>
                    @if($editbutton)
                    <td class="p-0 m-1 whitespace-nowrap w-20">
                        <a href="{{ route($prefixroute.'.edit', $item->id) }}"  class="btn btn--edit  m-1 w-16">Edit</a>
                    </td>
                    @endif
                    <td class="p-0 m-1 whitespace-nowrap w-20">
                        <x-btn-delete class="mr-1" route="{{route($prefixroute.'.destroy',$item->id)}}"  />
                    </td>
                    @endif
                  
                  </tr>
            @endforeach
        </tbody>
    </table>
    @if($pagination)
    <div class="flex--center-x">
        <x-pagination-bar :paginationData="$data"/>
    </div>
    @endif
</div>

<div class="hidden max-md:flex ">
    <div class="flex flex-col w-full ">
        @foreach($data as $item)
            <div class="flex  bg-light border-primary mb-4 justify-between ml-4">
                <div class="p-4">
                    @foreach($columns as $label => $attribute)
                        <div class="flex  mb-2">
                            {{ $label }}: 
                            @if (isset($item->{$attribute}))
                                {{ $item->{$attribute} }}
                            @else
                                @php
                                    $accessors = explode('->', $attribute);
                                    $value = $item;
                                    foreach ($accessors as $accessor) {
                                        $value = $value->{$accessor};
                                    }
                                @endphp
                                {{ $value }}
                            @endif
                        </div>
                    @endforeach
                </div>
                @if($admin)
                <div class="flex flex-col items-center m-2">
                    <a href="{{ route($prefixroute.'.show', $item->id) }}"  class="btn btn--success m-1 w-16">View</a>
                    @if($editbutton)
                    <a href="{{ route($prefixroute.'.edit', $item->id) }}"  class="btn btn--edit  m-1 w-16">Edit</a>
                    @endif
                    <x-btn-delete class="w-16 m-1" route="{{route($prefixroute.'.destroy',$item->id)}}"  />
                </div>
                @endif
            </div>
        @endforeach
        @if($pagination)
        <div class="flex--center-full">
            <x-pagination-bar :paginationData="$data"/>
        </div>
        @endif
    </div>
    
</div>
