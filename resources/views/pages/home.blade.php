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
    <div class="row col-md-12 slider" style="height: 450px;">
      <div class="tab-content col-md-9" id="v-pills-tabContent">
        <div class="tab-pane fade show active" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(0,0,0,0.7))" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-first-tab">
          <div class="desc-content">
            <h2 class="title-content"><img src="{{ asset('img/logo_ico.png') }}" alt=""> Archeage</h2>
            <h6 class="text-desc">Let's play some beautiful game together</h6>
          </div>
          <video width="100%" height="auto" loop video autobuffer autoplay muted style="z-index: -20;">
            <source id="mp4" src="{{ asset('archeage.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
          </video>
        </div>
        <div class="tab-pane fade show" style="background-image: linear-gradient(to bottom, rgba(255,0,0,0), rgba(0,0,0,0.7)), url(https://pbs.twimg.com/media/BwQQFJ_CYAACEwy.jpg)" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="desc-content">
            <h2 class="title-content">Archeage</h2>
            <h6 class="text-desc">Archeage updated to 1.0.2 version</h6>
          </div>
        </div>
        <div class="tab-pane fade" style="background-image:linear-gradient(to bottom, rgba(255,0,0,0), rgba(0,0,0,0.7)), url(https://cdn.discordapp.com/attachments/532538547488555058/545252423330037780/unknown.png); " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <div class="desc-content">
            <h2 class="title-content">AAEmu Launcher</h2>
            <h6 class="text-desc">Our developers now working on AAEmu launcher</h6>
          </div>
        </div>
        <div class="tab-pane fade" style="background-image:linear-gradient(to bottom, rgba(255,0,0,0), rgba(0,0,0,0.7)), url(http://static.zoonar.com/img/www_repository3/2c/5f/5b/10_c8b7ce054d9eab4d22973a304966a995.jpg); " id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab">
          <div class="desc-content">
            <h2 class="title-content">AAWeb Database</h2>
            <h6 class="text-desc">Database updated to version 1.0.2 on web site</h6>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="nav grid nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link slider-items active" id="v-pills-first-tab" data-toggle="pill" href="#v-pills-first" role="tab" aria-controls="v-pills-first" style="background-image: url(https://i.imgur.com/U0natDE.jpg);" aria-selected="true">
            <div class="black">
              <h6 class="my-0">Archeage</h6>
              <small class="text-desc">Free to play</small>
            </div>
          </a>
          <a class="nav-link slider-items" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" style="background-image: url(https://pbs.twimg.com/media/BwQQFJ_CYAACEwy.jpg);" aria-selected="true">
            <div class="black">
              <h6 class="my-0">Archeage</h6>
              <small class="text-desc">v. 1.0.2</small>
            </div>
          </a>
          <a class="nav-link slider-items" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tablist" aria-controls="v-pills-profile" style="background-image: url(https://cdn.discordapp.com/attachments/532538547488555058/545252423330037780/unknown.png);" aria-selected="false">
            <div class="black">
              <h6 class="my-0">AAEmu Launcher</h6>
              <small class="text-desc">New soft</small>
            </div>
          </a>
          <a class="nav-link slider-items" id="v-pills-second-tab" data-toggle="pill" href="#v-pills-second" role="tablist" aria-controls="v-pills-second" style="background-image: url(http://static.zoonar.com/img/www_repository3/2c/5f/5b/10_c8b7ce054d9eab4d22973a304966a995.jpg);" aria-selected="false">
            <div class="black">
              <h6 class="my-0">AAWeb Database</h6>
              <small class="text-desc">Database updated</small>
            </div>
          </a>
        </div>
      </div>
    </div>

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

@section('javascripts')
<script>
  var tabCarousel = setInterval(function() {
      var tabs = $('#tab-carousel .nav-tabs > li'),
          active = tabs.filter('.active'),
          next = active.next('li'),
          toClick = next.length ? next.find('a') : tabs.eq(0).find('a');
      toClick.trigger('click');
  }, 3000);

  $(".nav.nav-tabs li a").on("click", function (){
    clearInterval(tabCarousel);
  });
</script>
@stop