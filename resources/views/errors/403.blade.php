<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="/css/default.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script defer src="{{asset('js/app.js')}}"></script>
        <script defer src="/js/core.js"></script>
        <title>{{ $settings->page_name }} - Error 404</title>
    </head>
    <body>
        <div id="error-page">
            <span id="error-page-bg">403</span>
            <span id="error-page-message">Hey! No trespassers!</span>
        </div>
    </body>
</html>
