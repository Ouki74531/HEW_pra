<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>支払い詳細入力画面</title>
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/purchase_screen.css">
</head>
<body>
<?php require_once "./tpl/header.php"; ?>

        <div id="screen_name">
            <h1>決済画面</h1>
        </div>
        <main>
            <ul id="side">
                <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
                <li><div class="side"><a href="">プロフィール</a></div></li>
                <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
                <li><div class="side"><a href="listing_history">出品履歴</a></div></li>
            </ul>
            <div id="main">
            <section>
                <h2>氏名<small>※必須</small></h2>
                <div id="name">
                    <input type="text" placeholder="(例)田中" name="up_name" class="name">
                    <input type="text" placeholder="(例)太郎" name="down_name" class="name">
                </div>
            </section>
            <section>
                <h2>カナ<small>※必須</small></h2>
                <div id="kana_name">
                    <input type="text" placeholder="(例)タナカ" name="kana_up_name" class="kana_name">
                    <input type="text" placeholder="(例)タロウ" name="kana_down_name" class="kana_name">
                </div>
            </section>
            <section>
                <h2>メールアドレス<small>※必須</small></h2>
                <input type="text" name="mail_address" id="mail_adress" placeholder="(例)tarou@gmail.com">
                
            </section>
            <section>
                <h2>郵便番号<small>※必須</small></h2>
                <input type="text" name="postal_code" id="postal_code" placeholder="半角数字7文字">
            </section>
            <section>
                <div id="address2">
                    <h2>住所<small>※必須</small></h2>
                    <div class="btn-radius-gradient-wrap">
                    <button name="address" id="button" class="btn btn-flat">郵便番号から自動入力</button>
                    </div>
                </div>
                <select name="prefectures" id=""　placeholder="都道府県">
                    <option value="">選択してください</option>
                    <?php for($i = 0 ; $i < count($list) - 1 ; $i++): ?>
                    <option value="<?php echo $i; ?>"><?php echo $list[$i]; ?></option>
                    <?php endfor; ?>
                </select>
                <input type="text" name="" id="" placeholder="市区町村">
                <input type="text" name="" id="" placeholder="番地">
                <input type="text" name="" id="" placeholder="マンション名">
            </section>
            <section>
                <h2>支払い方法選択</h2>
                <div id="buy">
                    コンビニ払い<input type="radio" name="buy"><br>
                    バーコード決済<input type="radio" name="buy"><br>
                    クレジットカード決済<input type="radio" name="buy">
                </div>
                <table border="1">
                    <tr>
                        <th>クレジットカード名義<small>※必須</small></th>
                        <td><input type="text" name="name" placeholder="(例)TARO　OSAKA"></td>
                    </tr>
                    <tr>
                        <th>クレジットカード番号<small>※必須</small></th>
                        <td><input type="text" name="number"></td>
                    </tr>
                    <tr>
                        <th>有効期限<small>※必須</small></th>
                        <td>
                            <select name="" id="">
                            <option value="">-</option>
                            <option value="1">1</option>
                            </select>
                            月
                            <select name="" id="">
                                    <option value="">-</option>
                                    <option value="1">1</option>
                                
                            </select>
                            日
                        </td>
                    </tr>
                    <tr>
                        <th>支払い回数</th>
                        <td>一括<input type="radio" name="check"></td>
                    </tr>
                </table>
            </section>
            <section>
                <h2>配送先の選択</h2>
                <select name="prefectures" id=""　placeholder="都道府県">
                    <option value="">選択してください</option>
                    <option value="1">住所</option>
                </select>
            </section>
            </div>
        </main>
                        <form action="" method="POST">        <
                            <button name="submit" value="submit" id="submit">購入する</button>
                        </form>

        <footer>
            <p>copyright Tool✖︎Tool</p>
        </footer>
        <script src="js/jquery.js"></script>
</body>
</html>