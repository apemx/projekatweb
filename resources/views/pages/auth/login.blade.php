<x-app title="login" >   
<div class="flex--center-x mt-10 ">

    <form action="/login" method="POST">
       @csrf
       <x-input-field type="email" name="email" label="Email" />
       <x-input-field type="password" name="password" label="Password" />
       <x-btns-auth />
    </form>
</div>
</x-app>