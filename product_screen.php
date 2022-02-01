<?php
session_start();
// //ログインしてないとき
// if(!isset($_SESSION['id'])){
//     //cookie消す
//     session_destroy();
//     setcookie('PHPSESSID','',time() -60 * 60);
//     //商品一覧に飛ばす
//     header('location: login.php');
//     exit;
// }

//商品一覧画面
require_once "./const.php";
$msg = "";
if(isset($_SESSION["msg"])){
    $msg = $_SESSION["msg"];
    unset($_SESSION["msg"]);
}
$list = [];
//データベース接続処理
$link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$result = mysqli_query($link , "SELECT product.product_id AS 商品ID , member.member_name AS 会員名 , product.price AS 価格 , product.image AS 画像 , product.product_name AS 商品名, genre.genre_name AS ジャンル名 FROM product INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE product.conf = 0");
while($row = mysqli_fetch_assoc($result)){
    $list[] = $row;
}
mysqli_close($link);

//検索ボタン押された場合の処理
if(isset($_POST["search"])){
    $list = [];
    $link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    $result = mysqli_query($link , "SELECT product.product_id AS 商品ID , member.member_name AS 会員名 , product.price AS 価格 , product.image AS 画像 , product.product_name AS 商品名, genre.genre_name AS ジャンル名 FROM product INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE product.product_name LIKE '%".htmlspecialchars($_POST["name"],ENT_QUOTES)."%' AND conf = 0");
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
}

//出品者のリンクを押された場合の処理
if(isset($_GET["name"])){
    $list = [];
    $link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    $result = mysqli_query($link , "SELECT product.product_id AS 商品ID , member.member_name AS 会員名 , product.price AS 価格 , product.image AS 画像 , product.product_name AS 商品名, genre.genre_name AS ジャンル名 FROM product INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE member.member_name LIKE '%".htmlspecialchars($_GET["name"],ENT_QUOTES)."%' AND conf = 0");
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
}

//商品詳細へのリンクをクリックした場合の処理
if(isset($_GET["product_id"])){
    header("location:./detail.php?product_id=".$_GET['product_id']);
    exit;
}

require_once "./tpl/product_screen.php";
?>