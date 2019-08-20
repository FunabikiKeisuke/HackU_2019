<!DOCTYPE HTML>
<html lang="ja">
<!-- Open Graph Protcol(topページ以外はwebsiteをarticleへ変更) -->

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <!-- SEO対策用 後で設定 -->
    <title>アプリ名 | サブタイトル</title>
    <meta charset="utf-8">
    <!-- 読み込み速度向上用 preload -->
    <link rel="preload" href="css/common.css" as="style">
    <link rel="preload" href="css/common-sp.css" as="style">
    <link rel="preload" href="css/accountInformation.css" as="style">
    <link rel="preload" href="css/accountInformation-sp.css" as="style">

    <!-- SEO対策用 後で設定 -->
    <meta name="description" content="">
    <!-- SEO対策用 後で設定 -->
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/common.css" media="only screen and (min-width:1001px)">
    <link rel="stylesheet" href="css/accountInformation.css" media="only screen and (min-width:1001px)">
    <link rel="stylesheet" href="css/common-sp.css" media="only screen and (max-width:1000px)">
    <link rel="stylesheet" href="css/accountInformation-sp.css" media="only screen and (max-width:1000px)">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,500,700&display=swap" rel="stylesheet">
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
        function gtag() { dataLayer.push(arguments); }
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
    <article class="inner">
        <h2>アカウント情報</h2>
        <div>
            <label for="inputPassword">メールアドレス</label>
            <input class="box" type="email">
        </div>
        <div>
            <label for="inputEmail">今のパスワード</label>
            <input class="box" type="password">
        </div>
        <div>
            <label for="inputPassword">新しいパスワード</label>
            <input class="box" type="password">
        </div>
        <div class="submit">
            <input type="submit" class="btn" value="パスワード変更" href="#"></input>
        </div>
    </article>
</body>

</html>
