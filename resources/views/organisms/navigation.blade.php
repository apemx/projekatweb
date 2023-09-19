<nav class="p-4 bg-primary">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <div class="flex  justify-between items-center  w-full">      
            <div>
              @if(request()->is('/'))
              <a class="btn-nav" href="/">Home</a>
              <a href="#offers" class="btn-nav">Offers</a>
              @else
              <x-btn-back />
              <a class="btn-nav" href="/">Home</a>
              @endif  
              @can('admin')
              <a href="{{route('admin.dashboard')}}" class="btn-nav text-primary hover:underline">Dashboard</a>
              @endcan
              @can('agent')
              <a href="{{route('agent.dashboard')}}" class=" btn-nav  text-primary hover:underline">Dashboard</a>
              @endcan
              @can('user')
              <a href="{{route('dashboard')}}" class=" btn-nav text-primary hover:underline">Dashboard</a>
              @endcan
            </div>
            <div>
            <button class="text-primary md:hidden" id="btn-log">
              <i class="fa fa-user-circle font-Large" aria-hidden="true"></i>
            </button>
            </div>
      </div>
      
      <div id="hidden-code" class="flex flex-col justify-end  w-full min-md:hidden  m-2 ">
        <div class="flex justify-end">
          @auth
          <x-btn-logout />
          @else
          <a href="{{route('login')}}" class="btn btn--success">Login</a>
          <a href="{{route('register')}}" class="btn bg-info">Register</a>
          @endauth
          </div>
      </div>
      
    </div>
  </nav>
  