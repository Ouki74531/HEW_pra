<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入履歴</title>
    <link rel="stylesheet" href="./css/destyle.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/cart.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>
    <div id="screen_name">
        <h1>カート</h1>
    </div>
    <main>
    <ul>
        <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
        <li><div class="side"><a href="">プロフィール</a></div></li>
        <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
        <li><div class="side"><a href="./listing_history.php">出品履歴</a></div></li>
        </ul>
        <div id="main">
        <section>
            <div class="section">
            <div class="content">
                    
    <p><?php echo $msg; ?></p>
    <ul>
        <?php foreach($cart_list as $value): ?>
                    <li class="name">商品名 : <?php echo $value['product_name']; ?></li>
                    <li class="goodsno">商品ID : <?php echo $value['product_id'];?></li>
                    <li class="price">価格 : <?php echo $value['price']; ?>円</li>
                    <li class="janr">ジャンル名 : <?php echo $value['genre_name']; ?></li>
                    <li class="productimg"><img src="./img/<?php echo $value['image']; ?>" alt="画像" width="200px"></li>
            <form action="cart.php" method="post">
                <button name="del" id="submit" value="<?php echo $value['product_id'] ; ?>">削除</button>
            </form>
            <hr id="hr">
        <?php endforeach; ?>
    </ul>
            </div>
            </div>
        </section>
        <li class="li">商品数：<?php echo $product_cnt;?></li>
    <li class="li">合計金額：<?php echo $total; ?> 円（税込み）</li>

    <form action="purchase_screen.php" method="post">
        <button name="cart_btn" value="submit" id="submit">購入</button>
    </form>
        </div>
    </main>
    <footer>
        <p>copyright Tool✖︎Tool</p>
    </footer>
</body>
</html>