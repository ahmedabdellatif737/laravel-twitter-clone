<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-[Inter] min-h-screen">
<div id="app">
    <x-navbar />
    @yield("content")
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
