<?php
//購入履歴
session_start();
require_once "./const.php";

//ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    $_SESSION["msg"] = "購入履歴を閲覧するにはログインしてください";
    //商品一覧に飛ばす
    header('location: product_screen.php');
    exit;
}

$msg = "";
$link = [];
$id = $_SESSION["id"];
//購入した商品
$link = mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$result = mysqli_query($link , "SELECT product.product_name AS 商品名 , product.price AS 価格 , product.image AS 画像 , product.product_txt AS 商品説明 , genre.genre_name AS ジャンル , member.member_name AS 出品者 FROM purchase INNER JOIN product ON purchase.product_id = product.product_id INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE purchase.buyer_id =".$id);
if($result == false){
    $msg = "購入した履歴はございません";
}else{
    while($row = mysqli_fetch_assoc($result)){
        $link[] = $row;
    }
}
require_once "./tpl/purchase_history.php";
?>