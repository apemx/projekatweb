<x-app title="register">
    <div class="flex justify-center mt-10 ">
        <form action="{{route('register')}}" method="POST" class="flex flex-col text-center">
            @csrf
            <x-input-field name="name" type="text" label="Name" />
            <x-input-field name="email" type="email" label="Email" />
            <x-input-field name="password" type="password" label="Password" />
            <x-input-field name="password_confirmation" type="password" label="Confirm password" :isRequired="true" />
            <x-input-field name="contact" type="tel" label="Phone number" />
            <x-btns-auth submit="Register" />   
        </form>
    </div>
</x-app>