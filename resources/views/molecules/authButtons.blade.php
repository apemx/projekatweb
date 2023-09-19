@props(['submit'=>'Login','reset'=>'Reset'])
<div class="flex space-x-3 justify-center mt-4">
    <button class="btn btn--success" type="submit">{{$submit}}</button>
    <button class="btn btn--danger" type="Reset">{{$reset}}</button>
</div>