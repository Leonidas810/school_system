<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>
    @include('components.navbar')
    <div class="jumbotron d-flex align-items-center text-center">
        <div class="container">
            <h1 class="display-3">Welcome to My Laravel App</h1>
            <p class="lead">This is a simple welcome page for your Laravel project. Start building something amazing!</p>
            <p><a href="#" class="btn btn-primary btn-lg">Get Started</a></p>
        </div>
    </div>
    @include('components.footer')
</body>
<!-- Overlay para oscurecer el fondo -->
<div id="overlay"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</html>
