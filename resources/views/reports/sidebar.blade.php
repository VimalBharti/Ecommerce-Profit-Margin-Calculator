<nav id="sidebar" class="img" style="background-image: url({{asset('/images/bg-3.webp')}});background-size: cover;">
	<div class="p-4">
		<div class="avatar">
  		<img src="{{asset('images/user.png')}}" width="150" height="150">
  		<h4>{{Auth::user()->name}}</h4>
  		<p>
        <a class="logout-btn" href="{{ route('logout') }}"onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
      </p>
  	</div>
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="{{route('dashboard')}}"><span class="fa fa-home mr-3"></span> Dashboard</a>
      </li>
      <li>
          <a href="{{route('calculator')}}"><span class="fa fa-calculator mr-3"></span> Calculator</a>
      </li>
      <li>
        <a href="{{route('reports')}}"><span class="fa fa-database mr-3"></span> All Report</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
      </li>
      <li>
        <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
      </li>
    </ul>
  </div>
</nav>