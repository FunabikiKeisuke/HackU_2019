<!DOCTYPE HTML>
<html lang="ja">
<!-- Open Graph Protcol(topページ以外はwebsiteをarticleへ変更) -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <!-- SEO対策用 後で設定 -->
  <title>アプリ名 | サブタイトル</title>
  <meta charset="utf-8">
  <!-- 読み込み速度向上用 preload -->
  <link rel="preload" href="css/changePassword.css" as="style">
  <link rel="preload" href="css/changePassword-sp.css" as="style">
  <!-- SEO対策用 後で設定 -->
  <meta name="description" content="">
  <!-- SEO対策用 後で設定 -->
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/changePassword.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/changePassword-sp.css" media="only screen and (max-width:1000px)">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700,900&display=swap&subset=japanese" rel="stylesheet">
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
  </header>
  <!-- maincontents -->
  <main>
  <article class="inner">
    <h2 class="changePass">パスワード変更</h1>
      <div class="currentPass">
        <label>今のパスワード</label>
        <input type="text" name="email" class="box">
      </div>
      <div class="newPass">
        <label class="Pass">新しいパスワード</label>
        <input type="password" name="password" class="box">
      </div>
      <div class="check">
        <label class="Pass">再確認</label>
          <input type="password" name="password" class="box">
      </div>
      <div class="submitButton">
        <button type="submit" href="#" class="btn">確認</button>
      </div>
  </article>
</main>
  <!--
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/lazyload.min.js"></script>
  <script>
    $(function() {
      $("img.lazyload").lazyload();
    });
  </script>
  <script src="js/fade_scroll.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/wd.js"></script>
  <script>$(document).ready(tgBrowserWidth());</script>
  -->
</body>
</html>
