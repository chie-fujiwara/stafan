<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        @media (max-width:670px) {

            body {
                background-color: #f0f0f7;
                width: 325px;
                height: 660px;
                /* background: url(img/roku_aw.png) */

            }

            #wrapper nav {
                position: fixed;
                top: 0;
                right: -200px;
                width: 200px;
                height: 100%;
                padding-top: 50px;
                /* background: rgba(33, 33, 33, .9); */
                background: #f5c1bfdb;


                font-size: 16px;
                box-sizing: border-box;
                z-index: 2
            }

            #wrapper nav ul li {
                padding: 20px 5px;
                list-style: none;

            }

            #wrapper nav ul li a {
                text-decoration: none;
                color: #908b8b
            }

            #wrapper .btn-gnavi {
                position: fixed;
                top: 20px;
                right: 20px;
                width: 30px;
                height: 24px;
                z-index: 3;
                box-sizing: border-box;
                cursor: pointer;
                -webkit-transition: all 400ms;
                transition: all 400ms
            }

            #wrapper .btn-gnavi span {
                position: absolute;
                width: 30px;
                height: 4px;
                background: #666;
                border-radius: 10px;
                -webkit-transition: all 400ms;
                transition: all 400ms
            }

            #wrapper .btn-gnavi span:nth-child(1) {
                top: 0
            }

            #wrapper .btn-gnavi span:nth-child(2) {
                top: 10px
            }

            #wrapper .btn-gnavi span:nth-child(3) {
                top: 20px
            }

            #wrapper .btn-gnavi.open {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }

            #wrapper .btn-gnavi.open span {
                background: #fff
            }

            #wrapper .btn-gnavi.open span:nth-child(1) {
                width: 24px;
                -webkit-transform: translate(-7px, 17px) rotate(45deg);
                transform: translate(-7px, 17px) rotate(45deg)
            }

            #wrapper .btn-gnavi.open span:nth-child(3) {
                width: 24px;
                -webkit-transform: translate(-7px, -17px) rotate(-45deg);
                transform: translate(-7px, -17px) rotate(-45deg)
            }



            #wrapper .contents section {
                position: relative;
                width: 100%;
                height: 100vh;
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                overflow: hidden
            }

            #wrapper .contents section p {
                position: absolute;
                top: 35%;
                width: 30%;
                line-height: 30px;
                font-weight: bold;
                letter-spacing: 2.5px;
                /* -webkit-transform: translate(0, -50%); */
                /* transform: translate(0, -50%); */
                font-size: 30px;
                color: #2c2861e8;
                /* text-shadow: 0 0 6px #666 */
                /* 文字を斜めにするdeg=度 */
                transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -webkit-transform: rotate(-10deg);

            }

            #wrapper .contents section:nth-child(odd) p {
                left: 10%
            }

            #wrapper .contents section:nth-child(even) p {
                right: 10%
            }


            #section01 a {
                font-size: 3px;
                position: absolute;
                top: 43%;
                padding-left: 46px;
                line-height: 30px;
                font-weight: bold;
                /* letter-spacing: 2.5px; */
                transform: rotate(-10deg);
                -moz-transform: rotate(-10deg);
                -webkit-transform: rotate(-10deg);
                color: #2c2861e8;
            }

            #section01 p {
                font-family: 'Lora', serif;
            }

            /* #wrapper .contents section#section01 {
                background-image: url(../images/img01.jpg)
            }

            #wrapper .contents section#section02 {
                background-image: url(../images/img02.jpg)
            }

            #wrapper .contents section#section03 {
                background-image: url(../images/img03.jpg)
            }

            #wrapper .contents section#section04 {
                background-image: url(../images/img04.jpg)
            }

            #wrapper .contents section#section05 {
                background-image: url(../images/img05.jpg)
            }

            #wrapper .contents section#section06 {
                background-image: url(../images/img06.jpg)
            }

            #wrapper .contents section#section07 {
                background-image: url(../images/img07.jpg)
            } */
            /* } */
        }
        }
    </style>
</head>

<body>



    <!-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif



        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div> -->
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <title>ハンバーガーメニュー</title> -->
        <!-- <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/layout.css"> -->
    </head>

    <body>
        <div id="wrapper">
            <p class="btn-gnavi">
                <span></span>
                <span></span>
                <span></span>
            </p>
            <nav id="global-navi">
                <ul class="menu">
                    <li><a href="">TOP</a></li>
                    <li><a href="">LOG IN</a></li>
                    <li><a href="">新規会員登録</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </nav>
            <div class="contents">
                <section id="section01">
                    <p>Sta/reli
                    </p>
                    <a>買いたくなると、会いたくなる。</a>
                </section>
                <!-- <section id="section02">
                    <p>テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。テキストエリアです。
                    </p>
                </section> -->
            </div>
        </div>
        <!-- <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/index.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            // $(function() {
            $(".btn-gnavi").on("click", function() {

                var rightVal = 0;

                if ($(this).hasClass("open")) {
                    rightVal = -300; //右に３００
                    $(this).removeClass("open");
                } else {
                    $(this).addClass("open");
                }

                $("#global-navi").stop().animate({
                    right: rightVal
                }, 200); //200はアニメーションの速さ

            });
            // });
        </script>

    </body>


    </html>







</body>

</html>