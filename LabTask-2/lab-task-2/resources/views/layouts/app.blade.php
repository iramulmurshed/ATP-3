<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @yield('cssLink')

    <title>page</title>
</head>

<body class="mx-5 my-2">
    <nav class="d-flex  justify-content-between navc">
        <div>
            <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
            <a href="{{ route('services') }}" class="btn btn-primary">Services</a>
            <a href="{{ route('ourTerms') }}" class="btn btn-primary">Our Terms</a>
            <a href="{{ route('aboutUs') }}" class="btn btn-primary">About Us</a>
            <a href="{{ route('contactUs') }}" class="btn btn-primary">Contact Us</a>
        </div>

        <div>
            <a href="{{ route('signup') }}" class="btn btn-primary">sign up</a>
            <a href="{{ route('login') }}" class="btn btn-success">log in</a>
        </div>
    </nav>


    <div>
        @yield('content')
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
