<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Abletive :: tvOS客户端</title>
    <link rel="stylesheet" href="{{ url('css/tvos-app.css') }}">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="icon" href="favicon.png">
    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
    <div class="wrapper" id="main">
        <header>
            <div class="banner" style="background: url('{{ url('images/tvos/banner-bg.jpg') }}') no-repeat center center;">
                <div class="container" id="banner-content">
                    <div class="row">
                        <img src="{{ url('images/tvos/banner-tv.png') }}" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="row text-center" id="banner-callout">
                        <h1>Abletive Apple TV客户端</h1>
                        <h3>Abletive音乐社区的官方 <a href="http://v.abletive.com" target="_blank" style="text-decoration: none; color: #ee2; margin-left: -6px;">教学视频网站</a>tvOS App</h3>
                        <p>访问Apple TV的App Store下载此应用</p>
                        <p style="display: inline-block;"><span class="app-store-badge"></span></p>
                    </div>
                </div>
            </div>
        </header>
        <section id="screens">
            <div class="row">
                <div class="feature">
                    <figure class="screen" style="background: url('{{ url('images/tvos/index.jpg') }}') no-repeat center top;"></figure>
                    <aside class="description">
                        <h2>在电视上享受知识乐趣</h2>
                        <p>快速浏览最新的系列教程, 技能方向与精选导师的教程</p>
                        <p>一系列课程可以让你一步步地学习所需的知识</p>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="feature">
                    <aside class="description">
                        <h2>系列教程</h2>
                        <p>查看不同的系列教程, 查看本系列的每一集只需轻轻在Siri Remote上选中点击.</p>
                        <p>添加你喜欢的课程, 或者现在没时间看但是感兴趣? 没问题, 添加到稍后观看即可</p>
                    </aside>
                    <figure class="screen" style="background: url('{{ url('images/tvos/series.jpg') }}') no-repeat center top;"></figure>
                </div>
            </div>
            <div class="row">
                <div class="feature">
                    <figure class="screen" style="background: url('{{ url('images/tvos/skill.jpg') }}') no-repeat center top;"></figure>
                    <aside class="description">
                        <h2>技能方向</h2>
                        <p>没有人是天生就会所有技能的, 我们都是慢慢升级以后有技能点才能去解锁新技能. 所以先不要心急, 学习没有绝对的捷径, 我们需要一步步把基础打扎实</p>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="feature">
                    <aside class="description">
                        <h2>精选讲师</h2>
                        <p>不同讲师的不同内容, 找到你喜欢的讲师查看ta的教程</p>
                    </aside>
                    <figure class="screen" style="background: url('{{ url('images/tvos/tutor.jpg') }}') no-repeat center top;"></>
                </div>
            </div>
            <div class="row">
                <div class="feature">
                    <figure class="screen" style="background: url('{{ url('images/tvos/my.jpg') }}') no-repeat center top;"></figure>
                    <aside class="description">
                        <h2>我的课程</h2>
                        <p>查看我的最爱与之前添加的稍后观看</p>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="feature">
                    <aside class="description">
                        <h2>搜索课程</h2>
                        <p>快速搜索你感兴趣的关键字内容</p>
                    </aside>
                    <figure class="screen" style="background: url('{{ url('images/tvos/search.jpg') }}') no-repeat center top;"></figure>
                </div>
            </div>
            <div class="row">
                <div class="feature big-center">
                    <figure class="screen" style="background: url('{{ url('images/tvos/lesson.jpg') }}') no-repeat center top;"></>
                </div>
                <div class="col-lg-4 col-lg-offset-4 text-center description">
                    <h2>Siri Remote下滑</h2>
                    <p>即可查看本集课程的介绍, 标题与详情. 左右滑即可快进, 快退</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <p>Apple TV体验, 鼠标模拟</p>
                    <div class="app-icon" id="app-icon">
                        <div class="layers" style="transform: rotateY(0deg) rotateX(0deg);">
                            <div class="layer" style="transform: translateZ(-60px);"></div>
                            <div class="layer" style="transform: translateZ(-40px);"></div>
                            <div class="layer" style="transform: translateZ(-20px);"></div>
                            <div class="layer" style="transform: translateZ(0px);"></div>
                        </div>
                    </div>
                    <div class="description" style="margin-top: 70px;">
                        <p>在Apple TV上享受教程的乐趣，第一时间掌握最新教学动态！</p>
                        <p>由Cali独立开发完成<br>
                            // Crafted & Developed by Cali</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="copyright">
                    <p>&copy; {{ date("Y") }} Abletive. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ url('js/tvos-main.js') }}"></script>
    <script>
        $(function () {
            $('#app-icon').mousemove(function (e) {
                var offsetX = e.offsetX;
                var offsetY = e.offsetY;

                var degreeX = offsetY * (9.9 / 240) - 4.95;
                var degreeY = 4.85 - offsetX * (9.7 / 400);

                $($(this).find('.layers')[0]).css("transform", "rotateY(" + degreeY + "deg) rotateX(" + degreeX +"deg)");
            }).mouseleave(function () {
                var el = $(this);
                setTimeout(function () {
                    $(el.find('.layers')[0]).css("transform", "rotateY(0deg) rotateX(0deg)");
                }, 350);
            });
        });
    </script>
</body>
</html>