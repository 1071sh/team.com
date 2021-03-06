<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/top_style.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header-logo"><a href="{{ url('/') }}" class="header-logo__link">スタディジーズ</a></h1>
            <nav class="gnav">
                <ul class="gnav__list">
                    <li class="gnav__item"><a href="#link1" class="gnav__link">特徴</a></li>
                    <li class="gnav__item"><a href="#link2" class="gnav__link">使い方</a></li>
                    <li class="gnav__item"><a href="{{ url('login') }}" class="gnav__link">ログイン</a></li>
                    <li class="gnav__item"><a href="{{ url('login') }}" class="gnav__btn">質問をみる</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <div class="mv">
            <div class="mv__bg">
                <div class="mv__inner">
                    <div class="mv-copy">
                        <h2 class="mv-copy__title">学びをはじめよう</h2>
                        <div class="mv-copy__text">３行ぐらいのテキストでお願いします。<br>
                            この文章はダミーです。文字の大きさ、<br>
                            量、字間、行間等を確認するために入れています。</div>
                        <a href="{{ url('login') }}" class="button">質問を見る</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="intro index-sec" id="link1">
            <div class="l-inner">
                <h2 class="index-sec__title">特徴</h2>
                <div class="index-sec__lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>
                    この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</div>
                <ul class="intro-list">
                    <li class="intro-list__item">
                        <div class="intro-list__img"><img src="img/intro_img01.png" alt=""></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">メンバーの<br>時間単価を決める</h3>
                            <p class="intro-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                        </div>
                    </li>
                    <li class="intro-list__item">
                        <div class="intro-list__img"><img src="img/intro_img01.png" alt=""></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">メンバーの<br>時間単価を決める</h3>
                            <p class="intro-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                        </div>
                    </li>
                    <li class="intro-list__item">
                        <div class="intro-list__img"><img src="img/intro_img01.png" alt=""></div>
                        <div class="intro-list__body">
                            <h3 class="intro-list__title">メンバーの<br>時間単価を決める</h3>
                            <p class="intro-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="use index-sec" id="link2">
            <div class="l-inner">
                <h2 class="index-sec__title">使い方</h2>
                <div class="index-sec__lead">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</div>
                <ul class="use-list">
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">01</p>
                            <h3 class="use-list__title">使い方のタイトル</h3>
                            <div class="use-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</div>
                        </div>
                    </li>
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">02</p>
                            <h3 class="use-list__title">使い方のタイトル</h3>
                            <div class="use-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</div>
                        </div>
                    </li>
                    <li class="use-list__item">
                        <div class="use-list__img"></div>
                        <div class="use-list__body">
                            <p class="use-list__num">03</p>
                            <h3 class="use-list__title">使い方のタイトル</h3>
                            <div class="use-list__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認する</div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="cta index-sec">
            <div class="cta__content">
                <h2 class="index-sec__title">さっそく始めよう</h2>
                <p class="index-sec__text">１分後、プログラミングの世界でお会いしましょう。</p>
                <a class="cta__btn" href="{{ url('login') }}">詳しく見る</a>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="copyright">© 2020 Inoue, Inc.</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>