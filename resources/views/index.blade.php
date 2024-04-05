<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sawalinto</title>
    <link rel="shortcut icon" href="{{ asset('image/poto1.png') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    @vite(['resources/css/tailwind.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
   

</head>

<body>
    @include('part.nav')
    <div class="container ">
        @include('part.home')


        @include('part.about')

        @include('part.skill')


        @include('part.project')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    


    <script src="{{ asset('js/index.js') }}"></script>
    
    
</body>

</html>
