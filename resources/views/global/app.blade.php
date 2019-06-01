<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>

<header>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">logo here</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto offset-1 position-absolute" style="right: 0;">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gverdi">Gverdi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
{{--<div class="container my-5 d-none">
    <h1 class="h3 text-center f3">@yield('title')</h1>
</div>--}}
<div class="container mt-3">
// es kontentia
    @yield('content')
</div>

</body>
</html>