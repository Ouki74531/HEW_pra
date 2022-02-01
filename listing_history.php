<?php
//出品履歴
session_start();
require_once "./const.php";

//ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    //商品一覧に飛ばす
    $_SESSION["msg"] = "出品履歴を閲覧するにはログインしてください";
    header('location: product_screen.php');
    exit;
}

$msg = "";
$link = [];
$id = $_SESSION["id"];
//出品した商品
$link = mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$result = mysqli_query($link , "SELECT product.product_name AS 商品名 , product.price AS 価格 , product.image AS 画像 , product.product_txt AS 商品説明 , member.member_name AS 出品者 , genre.genre_name FROM purchase INNER JOIN genre ON purchase.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE product.member_id =".$id);
if($result == false){
    $msg = "出品した履歴はございません";
}else{
    while($row = mysqli_fetch_assoc($result)){
        $link[] = $row;
    }
}
require_once "./tpl/listing_history.php";
?>