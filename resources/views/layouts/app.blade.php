<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { max-width: 400px; margin: 0 auto; padding: 20px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>