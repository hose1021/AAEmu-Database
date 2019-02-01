<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('img/logo.png') }}" alt="AAWeb">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="/" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('all_items') }}" class="nav-link">Items</a>
        </li>
        <li class="nav-item">
          <a href="/npcs/all" class="nav-link">Npcs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>