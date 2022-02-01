<?php
require_once "./const.php";
session_start();
//ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    $_SESSION["msg"] = "出品画面を閲覧するにはログインしてください";
    //商品一覧に飛ばす
    header('location: product_screen.php');
    exit;
}
//出品ボタンが押された時の処理
if(isset($_POST["submit"])){
    //入力項目処理
    $price = $_POST["price"];//価格
    $txt = $_POST["txt"];//説明
    $img = $_FILES["img"]["name"];//画像
    $name = $_POST["name"];//商品名
    $genre = $_POST["genre"];//ジャンル名
    if($genre == "電動工具"){
        $genreID = 1;
    }elseif($genre == "空圧工具"){
        $genreID = 2;
    }elseif($genre == "計測器"){
        $genreID = 3;
    }elseif($genre == "大工工具"){
        $genreID = 4;
    }elseif($genre == "油圧工具"){
        $genreID = 5;
    }elseif($genre == "研磨工具"){
        $genreID = 6;
    }
    //データベース登録処理
    $link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    mysqli_query($link , "INSERT INTO product(member_id , price , product_txt , image , product_name , genre_id) VALUES(". $_SESSION["id"] ." , ". $price ." , '". $txt ."' , '". $img ."' , '". $name ."' , ". $genreID .")");
    mysqli_close($link);
    $upload_file = $_FILES['img'];
    move_uploaded_file($upload_file['tmp_name'] , "./img/" . $_FILES['img']['name']);
    $file_name = mb_convert_encoding("./img/". $_FILES['img']['name'] , 'sjis','utf8');
    $_SESSION["msg"] = "出品が完了しました";
    //出品完了画面
    header("location:./product_screen.php");
    exit;
}
//ログアウトボタンが押された場合の処理
if(isset($_POST["logout"])){
    unset($_SESSION["id"]);
    header("location:./product_screen.php");
}
require_once "./tpl/listing.php";
?>