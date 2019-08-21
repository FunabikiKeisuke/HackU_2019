<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <!-- SEO対策用 後で設定 -->
  <title>アプリ名 | サブタイトル</title>
  <meta charset="utf-8">
  <!-- 読み込み速度向上用 preload -->
  <link rel="preload" href="css/common.css" as="style">
  <link rel="preload" href="css/welcomepage.css" as="style">
  <link rel="preload" href="css/common-sp.css" as="style">
  <link rel="preload" href="css/welcomepage-sp.css" as="style">
  <!-- SEO対策用 後で設定 -->
  <meta name="description" content="">
  <!-- SEO対策用 後で設定 -->
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/common.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/welcomepage.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/common-sp.css" media="only screen and (max-width:1000px)">
  <link rel="stylesheet" href="css/welcomepage-sp.css" media="only screen and (max-width:1000px)">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,500,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide&display=swap&subset=latin-ext" rel="stylesheet">
  <!-- og: sns拡散用クリックしたくなるcontentを設定 -->
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src=""></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '');
  </script>
</head>
<body>
  <!-- header -->
  <header>
    <div class="hd_box">
      <h1 class="hd_logo">
        <a href="index.php">
          <img src="img/hd_logo.png" alt="FUTUREロゴ">
        </a>
      </h1>
      <div id="btn">
        <p>
          <span>M</span>
          <span>E</span>
          <span>N</span>
          <span>U</span>
        </p>
        <i></i>
        <i></i>
      </div>
      <div id="menu">
        <div class="menu-inner">
          <ul class="menu_ul">
            <!--<li>
            <a href="">ほしのかけら</a>
          </li>-->
            <li>
              <a href="settings.php">設定</a>
            </li>
            <li>
              <a href="logout.php">ログアウト</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- maincontents -->
 <main class="inner">
   <div class="logo">
     FUTURE
   </div>
   <p class="title">
     手軽にできる自己分析ツール<br>
     自分の心を理解しましょう。
   </p>
   <div class="abc">
   <div class="sinup">
      <p>新規登録はこちら</p>
      <div class="btn">
      <a href="signup.php">新規登録</a>
      </div>
   </div>
   <div class="sinin">
      <p>既に登録済みの方はこちらから</p>
      <div class="btn">
      <a href="login.php">ログイン</a>
      </div>
   </div>
   </div>
</main>
  </body>
</html>
