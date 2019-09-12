<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stareli</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">

    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

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

                <p>Stareli
                </p>
                <a>買いたくなると、会いたくなる。</a>
            </section>
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