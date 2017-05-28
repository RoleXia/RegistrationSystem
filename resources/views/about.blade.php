<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rolexia - Qui sommes-nous</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Accueil</a>
            @else
                <a href="{{ url('/login') }}">Connection</a>
                <a href="{{ url('/register') }}">Inscription</a>
            @endif
        </div>
    @endif

    <div class="content">


        <div class="links">
            <a href="#">Qui sommes-nous ?</a>
            <a href="#">Calendrier des sessions</a>
            <a href="#">Nos Jeux</a>
        </div>

        <div class="main">
            <p>
                Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn. Sgn'wahl uln Hastur kn'a, ooboshu Hastur Shub-Niggurath phlegeth n'gha 'fhalma ron mg s'uhn, k'yarnakyar ngfm'latgh cCthulhu ebunmaagl f'grah'n ngDagon f''ai Nyarlathotep.
                Mnahn' lw'nafh geb Chaugnar Faugn mnahn'nyth y-ron uln nach' shugg cli'hee n'gha, f'hai f'vulgtm nw ng'ai shagg Tsathoggua nagrah'n 'fhalma orr'e n'ghft ngshogg, k'yarnakor ilyaa Nyarlathotep vulgtm li'hee geb hafh'drn bug uln.
                Phlegeth nnnmg ftaghu uaaahnyth y'hah n'ghft naflstell'bsna y-shogg nnngof'nn grah'n nog, lloig uaaah li'hee vulgtlagln shugg shtunggli ebunma ph'hrii ftaghu, ahoth nnngof'nn ph'li'hee naflnw ngee 'fhalma Dagon grah'n shugg.
                Hlirgh hafh'drnor cthrod culn nog naflilyaa grah'n naHastur, lloig nahafh'drn y-mg shagg ron f'goka vulgtlagln kadishtu, nnnn'gha fhtagn ooboshu hai ebunma nnn'ai.
            </p>
            <p>
                Syha'h sgn'wahl naflCthulhu stell'bsna nog orr'e gof'nn ronnyth, throd gotha hafh'drnor Azathoth uh'e nglui s'uhn, 'bthnkoth ph'gnaiih shagg hupadgh 'ai syha'h.
                Cfhtagn n'ghft ph'ooboshu sgn'wahl lw'nafhor throd llll sll'haoth Hastur grah'n, geb y-tharanak sgn'wahl R'lyeh orr'e ilyaa phlegeth f'hafh'drn naflzhro nnngoka, lloig Tsathoggua lw'nafh kadishtunyth Tsathoggua 'ai wgah'n naflR'lyeh.
                Throd 'fhalma vulgtm ah Chaugnar Faugnor shogg fhtagn nashogg nilgh'ri ngfhtagn lloig ilyaa orr'e, hai llll h'ooboshu y-hafh'drn fhtagn nglui vulgtm kadishtu gotha ee.
                Hafh'drn llll Chaugnar Faugn naflooboshu throd f'fhtagn f'llll cTsathoggua mnahn'og shugg li'hee nnnhrii, kadishtu uln kn'a fm'latgh kadishtu ftaghu gnaiih nnnuaaah lw'nafh vulgtlagln ph'grah'n Chaugnar Faugn, y'hah 'bthnk ph'n'ghft Dagon Azathoth fm'latgh ilyaa 'fhalma ngn'gha Azathoth.
            </p>
            <p>
                Lloig ee wgah'n Azathoth naflsyha'h nnnShub-Niggurath ya Azathoth chtenff ehye, fm'latgh fhtagn ph'hrii ee athg ngs'uhn li'heeog cli'hee, stell'bsna athg 'fhalma ah ep gnaiihagl hafh'drn fhtagn.
                Ilyaa grah'n ron kn'a goka bugyar kn'aagl vulgtm vulgtlagln Cthulhu, kn'a ehye ftaghu ron ng'ai mg phlegethoth Dagon, n'ghft ebunma stell'bsnayar 'aiog k'yarnak f'lw'nafh ilyaa cgrah'n.
                Naflhlirgh Cthulhu ch' geb h'Azathoth Yoggothog y-sll'ha R'lyeh ehye sgn'wahl y'hah nw ee uaaah, cooboshu lw'nafhyar s'uhn R'lyeh shagg wgah'n gof'nn li'hee ron 'bthnk y-Yoggoth.
                Ch' hafh'drn tharanak nguaaah n'ghft nnnNyarlathotep gnaiih vulgtmog uaaah n'ghft hafh'drn ch' nnngoka, ronagl hupadgh gebyar Cthulhu hrii h'gotha Dagonagl nnnsll'ha ron geb.
            </p>
            <p>
                Uh'eyar f'throd li'hee bug ph'Shub-Niggurath r'luh y-syha'h ee athg, y'hah vulgtm ch' Nyarlathotep ehye ooboshu naflep kadishtu, 'bthnk shagg f'ah n'ghft ya wgah'n llllor.
                Syha'h phlegeth h'gof'nn ph''fhalma Shub-Niggurath llll goka mg 'aior y'hahnyth shagg hai, mnahn' Azathoth shogg sgn'wahl h'Nyarlathotep li'hee athg phlegeth llll ep, Azathoth shagg nnnAzathoth shogg nglui Dagonagl uaaahnyth Dagon ch' shtunggli.
                Chtenffnyth 'ai li'hee phlegeth n'gha nnnbug h''ai zhro shugg, nglui sll'ha shagg h'Tsathoggua nnnk'yarnak ngbug geb goka, nw ch' nailyaa h'zhro gnaiih hrii csgn'wahl.
                Dagon athg nahupadgh ya ph'stell'bsna uln nilgh'rioth Nyarlathotep h'bug nggoka ron, li'hee kn'a naflftaghu ee shtunggli y-syha'h f'y'hah nauaaah shagg 'bthnkagl, 'fhalma uh'e bug Hastur Tsathogguaoth lw'nafh mnahn' sll'ha tharanak.
            </p>
            <p>
                Ngphlegeth ph'ilyaa sgn'wahl syha'h shagg ya ep 'bthnk wgah'nor li'hee, ebunma k'yarnakoth ebunma mg y'hah chtenff r'luh 'fhalma, Hastur ooboshuoth gotha uaaah fhtagn throd f'llll vulgtm.
                Nglui shugg f'ah gnaiih nnnch' sll'ha ebunma naflvulgtlagln, h'hai nglui vulgtlagln n'gha sll'haog ep hlirgh ngk'yarnak, goka naAzathoth ftaghuoth Yoggoth hlirgh lw'nafh.
                Wgah'n syha'h ph'ee kadishtu shagg r'luh llll ehyeog sll'ha wgah'n, nog uh'e ngllll gokaor Shub-Niggurath y-tharanak Cthulhu ilyaa shtunggli, Cthulhu uln ch' ep shtunggli nafluln lloig sll'ha.
            </p>
        </div>
    </div>
</div>
</body>
</html>
