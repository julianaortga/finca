<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finca San pablo UFPS</title>
    @include('includes.styles')
</head>
<body class="framed main-scrollable">
    <div class="wrapper">
        @include('includes.topnavbar')
        <div class="dashboard">
            @include('includes.sidebar') 
            @yield('content')
        </div>
    </div>
    

    @include('includes.js')
</body>
</html>