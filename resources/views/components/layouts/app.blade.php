<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <x-layouts.navigation />
    @if(session('status'))
        <div >{{session('status')}}</div>
    @endif 
    {{ $slot }}
</body>
</html>
