<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />
    <script src="https://kit.fontawesome.com/545a205610.js" crossorigin="anonymous"></script>
    <title>schoolvoetbal</title>
</head>
<body>
    <header>
        <x-navbar />
    </header>
    <main>
        <div class="h1title"><h1>Schoolvoetbal</h1></div>
        <div class="logoFoto"><img src="{{asset('/style/img/logoBlauw.png')}}"/></div>
        {{$slot}}
    </main>
    <footer>
        <x-footer />
    </footer>
</body>
</html>
