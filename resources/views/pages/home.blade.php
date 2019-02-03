@extends('layout.main')

@section('title') Home Page | AAWeb @stop
 
@section('content')
<!-- Page Content -->
<div class="container">
  <h1 class="mt-3">You are Welcome</h1>
  <p>It's AAWeb for AAEmu private server database</p>
  <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Server status</h6>
        </div>
        @php
    	    $ip = "94.249.167.67";
    	    $port = "1237";
    	    $online = '<h6 class="my-0"><span class="badge badge-success my-0">Online</span></h6>';
    	    $offline = '<h6 class="my-0"><span class="badge badge-danger my-0">Offline</span></h6>';
    	if (! $sock=@fsockopen($ip, $port, $num, $error, 0.25))
    	    {echo "$offline";}
    	else
    	    {echo "$online";}
        @endphp
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Server version</h6>
        </div>
        <h6 class="my-0"><span class="badge badge-primary my-0">0.0.1.2</span></h6>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Players registered</h6>
        </div>
        <h6 class="my-0"><span class="badge badge-primary my-0">{{$users}}</span></h6>
      </li>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
          <h6 class="my-0">Discord</h6>
          <small class="text-muted">Community Discord server</small>
        </div>
        <h6 class="my-0 text-success"><a class="btn btn-outline-success" href="https://discordapp.com/invite/X8xhJEd">Connect</a></h6>
      </li>
    </ul>
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
        
      </div>
</div>
<!-- /.container -->
@stop