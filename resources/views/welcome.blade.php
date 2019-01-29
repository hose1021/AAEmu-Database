<!DOCTYPE html>
<html>
<head>
    <title>AAWeb - {% block title "Title Page" %}</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        body {
            padding-top: 5rem;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href=""><img src="/img/logo.png" alt="AAWeb"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">Home</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main role="main">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                    <div class="alert alert-danger">
                    </div>
                    <div class="alert alert-success">
                    </div>
            </div>
            <aside class="col-md-4 blog-sidebar">
            </aside>
        </div>
    </div>
</main>
<script type="text/javascript" src="/js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timeago.js/3.0.2/timeago.locales.min.js"></script>
<script>
    timeago().render(document.querySelectorAll('.timeago'), 'en')
</script>
</body>
</html>