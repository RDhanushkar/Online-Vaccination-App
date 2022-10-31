<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script>
            .containerX {
                align-texts:center;
            }
        </script>
    </head>
    
    <body>
        
        
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Person Name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="/detail/{{$people -> id}}">Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/smart/{{$people -> id}}">Smart Vaccine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/anno/{{$people -> id}}">Annoncement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="containerX">
            @yield("peoplelayout")
        </div>
    </body>
</html>