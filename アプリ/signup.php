<?php
require('dbconnect.php');

session_start();

error_reporting(E_ALL); // E_STRICTレベル以外のエラーを報告する
ini_set('display_errors', 'Off'); // 画面にエラーを表示しない

// 1.post送信されていた場合
if (!empty($_POST)) {
	define('MSG01', '入力必須です');
  define('MSG02', 'Emailの形式で入力してください');
  define('MSG03', 'パスワード（再入力）が合っていません');
  define('MSG04', '半角英数字のみご利用いただけます');
  define('MSG05', '6文字以上で入力してください');
	define('MSG06', 'このユーザー名は既に使われています');
	define('MSG07', 'このメールアドレスは既に使われています');
	define('MSG08', '年齢が正しくありません');

	$err_msg = array();

	// 2.フォームが入力されていない場合
	if (empty($_POST['user_name'])) {
		$err_msg['user_name'] = MSG01;
	}
	if (empty($_POST['sex'])) {
		$err_msg['sex'] = MSG01;
	}
	if (empty($_POST['age'])) {
		$err_msg['age'] = MSG01;
	}
  if (empty($_POST['mail'])) {
    $err_msg['mail'] = MSG01;
  }
  if (empty($_POST['password'])) {
    $err_msg['password'] = MSG01;
  }
  if (empty($_POST['pass_retype'])) {
    $err_msg['pass_retype'] = MSG01;
  }

  if (empty($err_msg)) {
		$user_name = $_POST['user_name'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
    $email = $_POST['mail'];
    $pass = $_POST['password'];
    $pass_re = $_POST['pass_retype'];

		// 3.user_nameが重複している場合
		if (empty($err_msg)) {
			$user = $db -> prepare('SELECT COUNT(*) AS cnt FROM users WHERE user_name=?');
			$user -> execute(array($_POST['user_name']));
			$record = $user -> fetch();
			if ($record['cnt'] > 0) {
				$err_msg['user_name'] = MSG06;
			}
		}

		// 4.mailが重複している場合
		if (empty($err_msg)) {
			$member = $db -> prepare('SELECT COUNT(*) AS cnt FROM users WHERE email=?');
			$member -> execute(array($_POST['mail']));
			$record = $member -> fetch();
			if ($record['cnt'] > 0) {
				$err_msg['mail'] = MSG07;
			}
		}

		// 5.年齢が0~99でない場合
    if (!preg_match("/^[1-9][0-9]?$/", $age)) {
      $err_msg['age'] = MSG08;
    }

    // 6.emailの形式でない場合
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
      $err_msg['mail'] = MSG02;
    }

    // 7.パスワードとパスワード再入力が合っていない場合
    if ($pass !== $pass_re) {
      $err_msg['password'] = MSG03;
    }

    if (empty($err_msg)) {

      // 8.パスワードとパスワード再入力が半角英数字でない場合
      if (!preg_match("/^[a-zA-Z0-9]+$/", $pass)) {
        $err_msg['password'] = MSG04;

      // 9.パスワードとパスワード再入力が6文字以上でない場合
      } elseif (mb_strlen($pass) < 6) {
        $err_msg['password'] = MSG05;
      }
		}
	}
	if (empty($err_msg)) {
		$_SESSION['join'] = $_POST;
		header("Location: https://believerfuture.000webhostapp.com/check.php");
		exit();
	}
}

//書き直し
if ($_REQUEST['action'] == 'rewrite') {
	$_POST = $_SESSION['join'];
	$err_msg['rewrite'] = true;
}
 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,500,700&display=swap" rel="stylesheet">
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
	<main>
		<section class="mainBox">
			<h2 class="entry">FUTURE 新規登録</h2>
			<form action="" method="post" enctype="multipart/form-data">
				<span class="err_msg msgzz"><?php if(!empty($err_msg['user_name'])) echo $err_msg['user_name']; ?></span>
				<div class="username">
					<label>ユーザー名</label>
						<input class="box" type="text" name="user_name">
				</div>
				<span class="err_msg msgzz"><?php if(!empty($err_msg['sex'])) echo $err_msg['sex']; ?></span>
				<div class="username">
					<label class="gender">性別</label>
						<input class="gender1" type="radio" name="sex" value="男">男
						<input class="gender1" type="radio" name="sex" value="女">女
				</div>
				<span class="err_msg msgzz"><?php if(!empty($err_msg['age'])) echo $err_msg['age']; ?></span>
				<div class="age">
					<label>年齢</label>
					<input class="box" type="text" name="age">
				</div>
				<span class="err_msg msgzz"><?php if(!empty($err_msg['mail'])) echo $err_msg['mail']; ?></span>
				<div class="mailaddress">
					<label>メールアドレス</label>
					<input class="box" type="text" name="mail">
				</div>
				<span class="err_msg msgzz"><?php if(!empty($err_msg['password'])) echo $err_msg['password']; ?></span>
				<div class="entry">
					<label>パスワード</label>
					<input class="box" placeholder="半角英数6～20文字" type="password" name="password"></input>
				</div>
				<span class="err_msg msgzz"><?php if(!empty($err_msg['pass_retype'])) echo $err_msg['pass_retype']; ?></span>
				<div class="reenter">
					<label>パスワード再入力</label>
					<input class="box" placeholder="上記のものを再入力" type="password" name="pass_retype"></input>
				</div>
				<div class="submit_btn">
					<input class="btn" type="submit" value="入力内容を確認する">
				</div>
			</form>
		</section>
</main>
</body>
</html>
