<?php
session_start();
require('dbconnect.php');

error_reporting(E_ALL); // E_STRICTレベル以外のエラーを報告する
// ini_set('display_errors', 'Off'); // 画面にエラーを表示しない

if (!isset($_SESSION['join'])) {
	header('Location: signup.php');
	exit();
}

if (!empty($_POST)) {
	// 登録処理をする
	$statement = $db -> prepare('INSERT INTO users SET user_name=?, sex=?, age=?, mail=?, password=?, created=NOW()');
	echo $ret = $statement -> execute(array(
		$_SESSION['join']['user_name'],
		$_SESSION['join']['sex'],
		$_SESSION['join']['age'],
		$_SESSION['join']['mail'],
		SHA1($_SESSION['join']['password']),
	));
	unset($_SESSION['join']);
	
	header('Location: thanks.php');
	exit();
}
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <!-- SEO対策用 後で設定 -->
  <title>アプリ名 | サブタイトル</title>
  <meta charset="utf-8">
  <!-- 読み込み速度向上用 preload -->
  <link rel="preload" href="css/common.css" as="style">
  <link rel="preload" href="css/subscription.css" as="style">
  <link rel="preload" href="css/common-sp.css" as="style">
  <link rel="preload" href="css/subscription-sp.css" as="style">
  <!-- SEO対策用 後で設定 -->
  <meta name="description" content="">
  <!-- SEO対策用 後で設定 -->
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/common.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/subscription.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/common-sp.css" media="only screen and (max-width:1000px)">
  <link rel="stylesheet" href="css/subscription-sp.css" media="only screen and (max-width:1000px)">
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
					<div class="gest">
						<p>ようこそ！<br>ゲストさん</p>
					</div>
				</a>
			</li>
			<li class="ico2">
				<a href="">
					<div class="img-wrap">
						<img src="img/hd_logo.png" alt="ロゴ">
					</div>
				</a>
			</li>
		</ul>
	</header>
	<!-- maincontents -->
	<main>
		<h2 class="entry">内容確認</h2>
		<form action="" method="post">
			<div class="username">
				<label>ユーザー名
					<?php echo htmlspecialchars($_SESSION['join']['user_name'], ENT_QUOTES); ?>
				</label>
			</div>
			<div class="username">
				<label>性別
					<?php echo htmlspecialchars($_SESSION['join']['sex'], ENT_QUOTES); ?>
				</label>
			</div>
			<div class="age">
				<label>年齢
					<?php echo htmlspecialchars($_SESSION['join']['age'], ENT_QUOTES); ?>
				</label>
			</div>
			<div class="mailaddress">
				<label>メールアドレス
					<?php echo htmlspecialchars($_SESSION['join']['mail'], ENT_QUOTES); ?>
				</label>
			</div>
			<div class="entry">
				<label>パスワード
					<p>【パスワードは表示されません】</p>
				</label>
			</div>
			<div class="submit_btn">
				<a href="signup.php?action=rewrite">書き直す</a>
				<input class="btn" type="submit" value="登録する">
			</div>
		</div>
	</form>
</main>
</body>
</html>
