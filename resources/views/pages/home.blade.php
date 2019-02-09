@extends('layout.main')

@section('title') Home Page | AAWeb @stop
 
@section('content')
<!-- Page Content -->
<div class="container container-bottom">
  <div class="py-4 text-center">
    <h2>You are welcome</h2>
    <p class="lead">This is AAEmu project. Created for players and developers.</p>
  </div>
  <div class="alert alert-dismissible alert-primary" role="alert">
    <p><strong>@Hose</strong>, <strong>@Roddy</strong> and <strong>@Altaress</strong> working on the web site. Now we working on main design, full database in web site, and adding map in website. You can offer us something to add. We try to create something cool not like the rest. Just write what you would like to see on the site, we will take into account all your wishes and try to recreate them. Just join in our discord server and write all you what you would to see in <a href="https://discord.gg/7pJZpqb" class="alert-link">#public-chat</a>.</p>
  </div>
  <div class="row">
    <ul class="col-md-7 order-md-1">
        <h4 class="mb-3">Server information</h4>
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
            <h6 class="my-0">Registered</h6>
          </div>
          <h6 class="my-0 text-success"><span class="badge badge-success my-0">{{ $users }}</span></h6>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Client</h6>
            <small class="text-muted">v. 1.0.1</small>
          </div>
          <h6 class="my-0 text-success"><a class="btn btn-success btn-sm" href="https://mega.nz/#!rJEXTITL!0L-_iRLGyYmmZQgwrux2IOJtmFhwm9yT2B7fqQQMUJ0">Download</a></h6>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Game_pak</h6>
            <small class="text-muted">extracted</small>
          </div>
          <h6 class="my-0 text-success"><a class="btn btn-primary btn-sm" href="https://aaemugit.tk/Naggerknife/AAEmu-Client">Open</a></h6>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Github Server</h6>
            <small class="text-muted">Server github repo</small>
          </div>
          <h6 class="my-0 text-success"><a class="btn btn-primary btn-sm" href="https://github.com/atel0/AAEmu">Open</a></h6>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Github Web</h6>
            <small class="text-muted">This web site github repo</small>
          </div>
          <h6 class="my-0 text-success"><a class="btn btn-primary btn-sm" href="https://github.com/hose1021/AAEmu-Database">Open</a></h6>
        </li>
      </ul>
      <div class="list-group col-md-5 order-md-2 mb-5">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Server news</span>
        </h4>
        <iframe src="https://cl2.widgetbot.io/channels/479677351618281472/481782245087248400" height="500" width="100%"></iframe>
      </div>
  </div>
</div>
<!-- /.container -->
@stop