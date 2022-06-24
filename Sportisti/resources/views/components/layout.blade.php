<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Sportisti' }}</title>
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="/sportisti">Sportisti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sportovi">Sportovi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Pretraga</a>
                    </li>
                    @if(auth()->user() == null)
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <div class='container'>
        {{ $slot }}
    </div>
</body>

</html>