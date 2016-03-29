<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="Abletive, Ableton Live, Ableton, Abletive iOS, Abletive客户端">
    <meta name="description" content="Abletive官方iOS App, iPhone客户端正式上线!">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Abletive iOS App">
    <meta property="og:title" content="iOS App下载 :: Abletive">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="Abletive官方iOS App, iPhone客户端正式上线!">

    <title>iOS App下载 :: Abletive</title>

    <link rel="icon" href="/favicon.png">
    <link rel="shortcut icon" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/favicon.png">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('css/ios-app.css') }}">
    <script src="{{ url('js/modernizr.custom.js') }}"></script>
</head>
<body>
<div id="app">
    <div class="wrapper">
        <header id="banner" class="section entered">
            <figure class="fancy-bg"></figure>
            <h1 class="hero-heading">iOS App</h1>
            <h2 class="heading-caption">
                正式上架
                <br>
                <span class="app-store" @click="redirectToAppStore">
                    <i class="app-store-badge"></i>
                </span>
            </h2>
            <div class="iPhone-wrapper">
                <div class="iPhone-inside">
                    <img src="/favicon.png" alt="Abletive iOS App">
                    <img src="/images/logo.png" alt="Abletive">
                </div>
            </div>
        </header>
        <section class="section" id="be-updated">
            <figure class="hand-hold-iphone"></figure>
            <aside>
                <h1>第一时间掌握文章咨询</h1>
                <h5>Get to be the first one that knows when there's a new post</h5>
            </aside>
        </section>
        <section class="section" id="enjoy-anywhere">
            <figure class="hand-hold-device"></figure>
            <aside>
                <div class="row">
                    <h1>随时随地享受Abletive乐趣</h1>
                    <h5>Enjoy Abletive anytime, at anywhere</h5>
                </div>
                <div class="row">
                    <h2>可快速浏览VIP专属页面</h2>
                    <h5>VIP exclusively arranged projects download page</h5>
                </div>
            </aside>
            <figure class="hidden-figure"></figure>
        </section>
        <section class="section" id="personal-pages">
            <figure class="device"></figure>
            @for($i = 0; $i < 4; $i++)
                <figure class="screen"></figure>
            @endfor
            <div class="row">
                <h1>个性化个人主页</h1>
                <h5>Your personalized page</h5>
            </div>
        </section>
        <section class="section" id="watch-online">
            <div class="box left">
                <figure class="vertical"></figure>
            </div>
            <div class="box right">
                <div class="text">
                    <h1>在线观看视频与教程</h1>
                    <h5>Watch video and tutorials online</h5>
                </div>
                <figure class="horizontal"></figure>
            </div>
        </section>
        <section class="section" id="communicate">
            <div class="box left">
                @for($i = 0; $i < 4; $i++)
                    <figure class="screen"></figure>
                @endfor
            </div>
            <div class="box right">
                <div class="row">
                    <h1>社区与交流</h1>
                    <h5>Social communication</h5>
                </div>
                <div class="row">
                    <h3>查看积分和消息</h3>
                    <h5>Don't miss any message and check who has got the biggest credits</h5>
                </div>
                <div class="row">
                    <h3>让评论与沟通不能更简单</h3>
                    <h5>Submitting comments couldn't be easier</h5>
                </div>
            </div>
        </section>
        <section class="section" id="download">
            <div class="row heading">
                <h1>赶快前往下载</h1>
                <h3>由Cali精心开发</h3>
            </div>
            <div class="row caption">
                <h4>喜欢的话在App Store评论支持一下噢</h4>
                <span class="app-store" @click="redirectToAppStore">
                    <i class="app-store-badge"></i>
                </span>
            </div>
            <div class="row qr-code" @click="redirectToAppStore">
                <img src="/images/ios/iOSQRCode.png" alt="Abletive iOS App QR-Code">
            </div>
            <div class="row thanks">
                <h4>特别鸣谢:</h4>
                <h4>// Wesley - Graphic Designer</h4>
                <h4>// 3ASiC - Music Producer</h4>
            </div>
        </section>
        <footer class="section">
            <div class="copyright">
                <h2>&copy; {{ date("Y") }} - Abletive.com</h2>
            </div>
        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ elixir('js/ios-main.js') }}"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/inview.min.js"></script>
<script src="/js/ios-app.js"></script>
</body>
</html>