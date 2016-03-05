<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>iOS App下载 :: Abletive</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('css/ios-app.css') }}">
    <script src="{{ url('js/modernizr.custom.js') }}"></script>
</head>
<body>
<div class="main">
    <div class="logo-canvas">
        @for($i = 0; $i <= 24; $i++)
            <div class="shard-wrap">
                <div class="shard"></div>
            </div>
        @endfor
    </div>
</div>

{{--<audio id="intro-audio" src="{{ url('audio/intro.wav') }}" preload="true" loop></audio>--}}
<!-- Scripts -->
<script src="{{ elixir('js/ios-main.js') }}"></script>
</body>
</html>