<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/landing.css">
    <link rel="stylesheet" href="/css/pages.css">
    <link rel="stylesheet" href="/css/forms.css">

</head>
<body>
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
</body>
</html>
