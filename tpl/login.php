<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" type="text/css" href="./css/destyle.css">
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
    <?php require_once "./tpl/header.php"; ?>

        <div id="screen_name">
            <h1>ログイン</h1>
        </div>
        <main>

        <ul>
        <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
        <li><div class="side"><a href="">プロフィール</a></div></li>
        <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
        <li><div class="side"><a href="./listing_history.php">出品履歴</a></div></li>
        </ul>
        <form action = "" method = "POST">
            <div id="main">
            <section>
                <h2>ログインID<small>※必須</small></h2>
                <input type="text" name="loginID" id="loginID" placeholder="(例)tarou@gmail.com">
            </section>
            <section>
                <h2>パスワード<small>※必須</small></h2>
                <input type="password" name="password" id="password">
            </section>
            <button name="submit" value="submit" id="submit">ログイン</button>
        </form>
        </main>
        
    
        <footer>
            <p>copyright Tool✖︎Tool</p>
        </footer>
        <script src="js/jquery.js"></script>
</body>
</html>