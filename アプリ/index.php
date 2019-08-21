<?php
require('dbconnect.php');

session_start();

error_reporting(E_ALL); // E_STRICTレベル以外のエラーを報告する
ini_set('display_errors', 'Off'); // 画面にエラーを表示しない

// ログイン判定
if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	// ログインしている
	$_SESSION['time'] = time();

	$members = $db->prepare('SELECT * FROM users WHERE id=?');
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
    <div class="contentbox">
      <a href="question.php">
        <div class="img-wrap">
          <img src="img/index/1.png" alt="クエスチョンマークのアイコン">
        </div>
        <h2>質問ノート</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="graph.php">
        <div class="img-wrap">
          <img src="img/index/2.png" alt="グラフのアイコン">
        </div>
        <h2>分析</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="jissekiList.php">
        <div class="img-wrap">
          <img src="img/index/3.png" alt="リストのアイコン">
        </div>
        <h2>実績リスト</h2>
      </a>
    </div>
    <div class="contentbox">
      <a href="">
        <div class="img-wrap">
          <img src="img/index/4.png" alt="天体の画像">
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
