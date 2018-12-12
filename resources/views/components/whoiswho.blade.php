@if (Auth::guard('web')->check())
	<p class="text-success">logged in As user</p>
@else
  	<p class="text-danger">Not logged in as user</p>
@endif

@if (Auth::guard('admin')->check())
	<p class="text-success">logged in As admin</p>
@else
  	<p class="text-danger">Not logged in as admin</p>
@endif