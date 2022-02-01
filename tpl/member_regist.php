<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/member_regist.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>

        <div id="screen_name">
            <h1>会員登録</h1>
        </div>
        <main>

        <ul id="side">
        <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
        <li><div class="side"><a href="">プロフィール</a></div></li>
        <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
        <li><div class="side"><a href="./product_history.php">出品履歴</a></div></li>
        </ul>
        <form action = "" method = "POST">
            <div id="main">
            
            <section>
                <h2>氏名<small>※必須</small></h2>
                <input type="text" placeholder="(例)田中" name="up_name" class="name">
                <input type="text" placeholder="(例)太郎" name="down_name" class="name">
            </section>
            <section>
                <h2>メールアドレス<small>※必須</small></h2>
                <input type="text" name="mail" id="mail_adress" placeholder="(例)tarou@gmail.com">
            </section>
            <section>
                <div id="address2">
                    <h2>住所<small>※必須</small></h2>
                </div>
                <select name="prefectures" id="japan"　placeholder="都道府県">
                    <option value="">選択してください</option>
                    <?php for($i = 0 ; $i < count($list) - 1 ; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $list[$i]; ?></option>
                    <?php endfor; ?>
                </select>
                <input type="text" name="address1" id="" placeholder="市区町村">
                <input type="text" name="address2" id="" placeholder="番地">
                <input type="text" name="address3" id="" placeholder="マンション名">
            </section>

            <section>
                <h2>生年月日<small>※必須</small></h2>
                <input type="text" name="birthday" id="birthday" placeholder="(例)tarou@gmail.com">
            </section>
            <section>
                <h2>電話番号<small>※必須</small></h2>
                <input type="text" name="tel" id="tel" placeholder="(例)000-0000-0000">
            </section>
            <section>
                <h2>ログインID<small>※必須</small></h2>
                <input type="text" name="loginID" id="loginID" placeholder="(例)tarou@gmail.com">
            </section>
            <section>
                <h2>パスワード<small>※必須</small></h2>
                <input type="password" name="password" id="password" placeholder="(例)tarou@gmail.com">
            </section>
            <button name="submit" value="submit" id="submit">この情報で登録する</button>
        </form>
        </main>
        
    
        <footer>
            <p>copyright Tool✖︎Tool</p>
        </footer>
        <script src="js/jquery.js"></script>
</body>
</html>