
<form action="{{ $route }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" {{$attributes->merge(['class' =>'btn btn--danger'])}}>Delete</button>
</form>

