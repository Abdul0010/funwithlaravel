<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my first app</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>