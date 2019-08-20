<?php
// ログイン判定
if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	// ログインしている
	$_SESSION['time'] = time();

	$members = $db->prepare('SELECT * FROM members WHERE id=?');
	$members->execute(array($_SESSION['id']));
	$member = $members->fetch();
} else {
	// ログインしていない
	header('Location: https://believerfuture.000webhostapp.com/welcomepage.php'); exit();
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<!-- Open Graph Protcol(topページ以外はwebsiteをarticleへ変更) -->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <!-- SEO対策用 後で設定 -->
  <title>アプリ名 | サブタイトル</title>
  <meta charset="utf-8">
  <!-- 読み込み速度向上用 preload -->
  <link rel="preload" href="css/common.css" as="style">
  <link rel="preload" href="css/index.css" as="style">
  <link rel="preload" href="css/common-sp.css" as="style">
  <link rel="preload" href="css/index-sp.css" as="style">
  <!-- SEO対策用 後で設定 -->
  <meta name="description" content="">
  <!-- SEO対策用 後で設定 -->
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/common.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/index.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/common-sp.css" media="only screen and (max-width:1000px)">
  <link rel="stylesheet" href="css/index-sp.css" media="only screen and (max-width:1000px)">
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
    <ul>
      <li class="ico1">
        <a href="">
          <div class="img-wrap">
            <img src="img/hd_logout.png" alt="ログアウトのアイコン">
          </div>
          <p>ログアウト</p>
        </a>
      </li>
      <li class="ico2">
        <a href="">
          <div class="img-wrap">
            <img src="img/hd_logo.png" alt="ロゴ">
          </div>
        </a>
      </li>
      <li class="ico3">
        <a href="">
          <div class="img-wrap">
            <img src="img/hd_star.png" alt="星のアイコン">
          </div>
          <p>ほしのかけら</p>
        </a>
      </li>
      <li class="ico4">
        <a href="">
          <div class="img-wrap">
            <img src="img/hd_settings.png" alt="設定のアイコン">
          </div>
          <p>設定</p>
        </a>
      </li>
    </ul>
  </header>
  <!-- maincontents -->
  <article class="inner">
    <div class="contentbox">
      <a href="">
        <div class="img-wrap">
          <img src="img/index/notebook.png" alt="ノートのアイコン">
        </div>
        <h2>質問ノート</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="">
        <div class="img-wrap">
          <img src="img/index/graph.png" alt="グラフのアイコン">
        </div>
        <h2>分析</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="">
        <div class="img-wrap">
          <img src="img/index/list.png" alt="リストのアイコン">
        </div>
        <h2>実績リスト</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="">
        <div class="img-wrap">
          <img src="img/index/star.png" alt="天体の画像">
        </div>
        <h2>天体</h2>
      </a>
    </div>
  </article>

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
