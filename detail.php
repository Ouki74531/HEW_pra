<?php
//商品詳細画面
require_once "./const.php";

session_start();
////ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    //商品一覧に飛ばす
    header('location: product_screen.php');
    exit;
}

//商品一覧のリンクから来てない場合商品一覧に飛ばす処理
if(!isset($_GET["product_id"])){
    header("location:./product_screen.php");
    exit;
}

//データベース接続処理
if(isset($_GET["product_id"])){
    $id = $_GET["product_id"];
}elseif(isset($_POST["product_id"])){
    $id = $_POST["product_id"];
}
$link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$result = mysqli_query($link , "SELECT product.product_name AS 商品名 , product.price AS 価格 , product.image AS 画像 , product.product_txt AS 商品説明 , genre.genre_name AS ジャンル , member.member_name AS 会員名 FROM product INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE product.product_id =".$id);
$row = mysqli_fetch_assoc($result);
mysqli_close($link);
//カートに入れるボタンが押された場合の処理
if(isset($_POST["put"])){
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = [];
        $_SESSION['cart'][1] = $id;
    }else{
        $cnt = count($_SESSION['cart'])+1;
        $_SESSION['cart'][$cnt] = $id;
    }
    header("location:./product_screen.php");
    exit;
}
require_once "./tpl/detail.php";
?>