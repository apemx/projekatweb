@props(['href'=>'#','label'=>'','icon'=>null])
<div class="flex flex-col justify-center bg-primary w-small h-small items-center ">
    <a href="{{$href}}" class="bg-red-200 w-full h-full zoom-on-hover">
        <div {{$attributes->merge(['class'=>'flex flex-col justify-center items-center text-white hover-darken-10 w-full h-full'])}}>
        <i class="{{$icon}} font-Large my-3"></i>
        <h4>{{$label}}</h4>
        </div>
    </a>
</div>