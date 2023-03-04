<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    Menu principal
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
