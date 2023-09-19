<form action="/logout" method="POST">
    @csrf
    <button type="submit" {{$attributes->merge(['class' =>'btn btn--danger'])}}>Logout</button>
  </form>