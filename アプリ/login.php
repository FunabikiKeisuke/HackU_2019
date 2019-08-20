<?php
require('dbconnect.php');

session_start();

error_reporting(E_ALL); // E_STRICTレベル以外のエラーを報告する
ini_set('display_errors', 'Off'); // 画面にエラーを表示しない

if ($_COOKIE['user_name'] != '') {
	$_POST['user_name'] = $_COOKIE['user_name'];
	$_POST['password'] = $_COOKIE['password'];
	$_POST['save'] = 'on';
}

if (!empty($_POST)) {
  define('MSG01', 'ユーザー名とパスワードを入力してください');
  define('MSG02', '入力が正しくありません');

	//ログイン処理
	if ($_POST['user_name'] != '' && $_POST['password'] != '') {
		$login = $db -> prepare('SELECT * FROM users WHERE user_name=? AND password=?');
		$login -> execute(array(
			$_POST['user_name'],
			SHA1($_POST['password'])
		));
		$member = $login -> fetch();

		if ($member) {
			//ログイン成功
			$_SESSION['id'] = $member['id'];
			$_SESSION['time'] = time();

			//ログイン情報を記録する
			if ($_POST['save'] == 'on') {
				setcookie('user_name', $_POST['user_name'], time() + 60 * 60 * 24 * 14);
				setcookie('password', $_POST['password'], time() + 60 * 60 * 24 * 14);
			}

	    header("Location: https://believerfuture.000webhostapp.com");
			exit();
		} else {
			$err_msg['login'] = MSG02;
		}
	} else {
		$err_msg['login'] = MSG01;
	}
}
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,500,700&display=swap" rel="stylesheet">


  <!-- SEO対策用 後で設定 -->
  <title>アプリ名 | サブタイトル</title>
  <meta charset="utf-8">
  <!-- 読み込み速度向上用 preload -->
  <link rel="preload" href="css/common.css" as="style">
  <link rel="preload" href="css/common-sp.css" as="style">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <!-- SEO対策用 後で設定 -->
  <meta name="description" content="">
  <!-- SEO対策用 後で設定 -->
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="css/common.css" media="only screen and (min-width:1001px)">
  <link rel="stylesheet" href="css/common-sp.css" media="only screen and (max-width:1000px)">
  <link rel="stylesheet" type="text/css" href="css/login.css" media="only screen and (min-width:1001px)">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700,900&display=swap&subset=japanese" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
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
          <div class="img-wrap">
            ようこそ！<br>
            ゲストさん
          </div>
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
  <main class="inner">
    <section class="mainBox">
      <h2 class="login">ログイン</h2>
      <form action="" method="post">
        <div class="username">
          <span class="err_msg"><?php if(!empty($err_msg['login'])) echo $err_msg['login']; ?></span>
          <label>ユーザー名
            <input class="box" type="user_name" name="user_name" value="<?php echo htmlspecialchars($_POST['user_name'], ENT_QUOTES); ?>">
          </label>
        </div>
        <div class="loginpass">
          <label>パスワード
            <input class="box" type="password" name="password" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>">
          </label>
        </div>
        <div class="form-group">
          <input type="checkbox" class="form-control" id="save" name="save" value="on">
          <label for="save" id="rememberLabel" class="rememberMe">次回から自動的にログインする</label>
        </div>
        <input type="submit" class="btn" value=ログイン href="https://believerfuture.000webhostapp.com"></input>
        <div class="form-group">
          <a href="signup.php" class="newUser">新規登録はこちら</a>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
