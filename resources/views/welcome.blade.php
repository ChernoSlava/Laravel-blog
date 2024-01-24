<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'figtree', sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background: linear-gradient(to right, #8e44ad, #3498db);
            }

            a {
                margin: 0 10px;
                text-decoration: none;
                color: #fff;
                font-weight: 600;
                font-size: 28px;
                transition: color 0.3s ease;
            }

            a:hover {
                color: #ffcc00;
            }
        </style>
    </head>
    <body class="antialiased">
        <a href="{{ route('about.index') }}">About</a>
        <a href="{{ route('articles.index') }}">Articles</a>

        @if(isset($data))
            <p>Data from server:</p>
            <ul>
                <li><strong>Message:</strong> {{ $data['message'] }}</li>
                <li><strong>Timestamp:</strong> {{ $data['timestamp'] }}</li>
            </ul>
        @else
            <p>No data received.</p>
        @endif
    </body>
</html>
