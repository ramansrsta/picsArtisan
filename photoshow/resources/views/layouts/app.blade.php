<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Photo Show</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
</head>
<body>
    @include('inc.topbar')
    <br>
    <div class="row">
        @include('inc.messages')
        @yield('content');
    </div>
</body>
</html>