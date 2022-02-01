<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧画面</title>
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" href="css/product_screen.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>

<div id="screen_name">
    <h1>TOP</h1>
</div>

<?php echo $msg; ?>

    <main>
        <ul id="side">
        <form action="" method=""POST>
            検索<input type="text" name="name">
            <button type="submit" nmae="search" id="search" >検索</button>
        </form>
            <li><a href="./product_screen.php" class="li">TOP(商品一覧)ページ</a></li>
            <hr>
            <li><a href="" class="li">プロフィール画面</a></li>
            <hr>
            <li><a href="./purchase_history.php" class="li">購入履歴</a></li>
            <hr>
            <li><a href="./listing_history.php" class="li">出品履歴</a></li>
        </ul>
        <div id="main">
            <?php for($i = 0 ;$i < count($list) ; $i++): ?>
                <div id="product_box">
                    <div id="img_box">
                        <img src="./img/<?php echo $list[$i]["画像"]; ?>" alt="商品画像" width="" height="">
                    </div>
                    <div id="product_detail">
                        <p>商品ID : <?php echo $list[$i]["商品ID"]; ?></p>
                        <p>商品名 : <?php echo $list[$i]["商品名"]; ?></p>
                        <p>価格 : <?php echo $list[$i]["価格"]; ?></p>
                        <p>ジャンル : <?php echo $list[$i]["ジャンル名"]; ?></p>
                        <p><a href="./product_screen.php?name=<?php echo $list[$i]["会員名"]; ?>">出品者 : <?php echo $list[$i]["会員名"]; ?></a></p>
                        <p><a href="./detail.php?product_id=<?php echo $list[$i]["商品ID"]; ?>">詳細へ</a></p>
                    </div>
                </div>
                <hr>
            <?php endfor; ?>
        </div>
    </main>
    <footer>
        <p>copyright Tool✖︎Tool</p>
    </footer>
    <script src="js/jquery.js"></script>
</body>
</html>