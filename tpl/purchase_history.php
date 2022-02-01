<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入履歴</title>
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/purchase_history.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>
    <div id="screen_name">
        <h1>購入履歴</h1>
    </div>
    <main>
        <ul id="side">
            <li><a href="./product_screen.php" class="li">TOP(商品一覧)ページ</a></li>
            <li><a href="" class="li">プロフィール画面</a></li>
            <li><a href="./purchase_history.php" class="li">購入履歴</a></li>
            <li><a href="./lisitng_history.php" class="li">出品履歴</a></li>
        </ul>
        <div id="main">
        <section>
            <div class="section">
                <img src="./img/noimage.png" alt="画像" class="img">
                <div class="content">
                    <h2 class="name">商品名:〇〇〇〇〇</h2>
                    <p class="goodsno">商品NO:123456</p>
                    <p class="price">値段:123456円</p>
                    <p class="janr">ジャンル名:工具</p>
                    <p class="seller"><img src="./img/noimage.png" alt="プロフィール" class="profile"><a href="" class="a">出品者:user1234</a></p>
                    <p class="detail">詳細:〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
            </div>
        </section>
        <section>
            <div class="section">
                <img src="./img/noimage.png" alt="画像" class="img">
                <div class="content">
                    <h2 class="name">商品名:〇〇〇〇〇</h2>
                    <p class="goodsno">商品NO:123456</p>
                    <p class="price">値段:123456円</p>
                    <p class="janr">ジャンル名:工具</p>
                    <p class="seller"><img src="./img/noimage.png" alt="プロフィール" class="profile"><a href="" class="a">出品者:user1234</a></p>
                    <p class="detail">詳細:〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</p>
                </div>
            </div>
        </section>
        </div>
    </main>
    <footer>
        <p>copyright Tool✖︎Tool</p>
    </footer>
</body>
</html>