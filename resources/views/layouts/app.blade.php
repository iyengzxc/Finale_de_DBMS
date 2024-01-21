<!DOCTYPE html>
<html lang="en"  data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Reyel Vargas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid bg-dark text-white py-5">
        <div class="container">
            <h1 class="display-4 text-danger">Welcome</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">WAG KOPYAHIN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item h4 ">
                    <a class="nav-link text-primary" href="{{ route('index') }}">Events</a>
                </li>
                <li class="nav-item h4">
                    <a class="nav-link text-warning" href="{{ route('show') }}">Attendees</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
        </div>
    </div>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-white">
        &copy; John Reyel Vargas
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>