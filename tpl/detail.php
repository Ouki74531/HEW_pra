<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入詳細画面</title>
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>

    <div id="screen_name">
            <h1>決済画面</h1>
        </div>
    <main>
        <ul id=side>
        <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
        <li><div class="side"><a href="">プロフィール</a></div></li>
        <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
        <li><div class="side"><a href="./listing_history.php">出品履歴</a></div></li>
        </ul>
        <div id="main">
            <div id="detail">
                <p>商品名:<?php echo $row["商品名"]; ?></p>
                <p>価格:<?php echo $row["価格"]; ?>円</p>
                <p>商品説明:<?php echo $row["商品説明"]; ?></p>
                <p>ジャンル:<?php echo $row["ジャンル"]; ?></p>
                <p>出品者:<?php echo $row["会員名"]; ?></p>
            </div>
                <p><img src="./img/<?php echo $row["画像"]; ?>" alt="画像" width="200px"></p>
            <form action="" method="POST">
                <input type="hidden" name="product_id" value="<?php $id; ?>">
                <button class="detail_btn" type="submit" name="put" value="put">カートに入れる</button>
            </form>
        </div>
    </main>
        <footer>
            <p>copyright Tool✖︎Tool</p>
        </footer>
        <script src="js/jquery.js"></script>
</body>
</html>