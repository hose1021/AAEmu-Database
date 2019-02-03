<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="AAWeb">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dLabel" role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
                       href="">
                        Database
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li>
                            <a class="dropdown-item" tabindex="-1" href="{{route('all_items')}}">
                                Items
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/reg" class="nav-link">Registration</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
