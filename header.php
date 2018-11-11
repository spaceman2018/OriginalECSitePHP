<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['login_flg']) == false) {
    echo 'ようこそ ゲスト 様 ';
    echo '<br /><br />';
    echo '<a href='.$rootPath.'login.php>ログインはこちら</a><br />';
    echo '<a href='.$rootPath.'user/createUser.php>会員登録はこちら</a><br />';
    echo '<a href='.$rootPath.'topPage.php>トップページへ戻る</a><br />';
    echo '<br /><br />';
} elseif ($_SESSION['status'] == 0) {
    echo 'ようこそ ';
    echo $_SESSION['family_name'].$_SESSION['first_name'];
    echo ' 様 ';
    echo '<br /><br />';
    echo '<a href='.$rootPath.'logout.php>ログアウト</a><br />';
    echo '<br /><br />';
} else {
    echo 'ようこそ ';
    echo $_SESSION['family_name'].$_SESSION['first_name'];
    echo ' 様 ';
    echo '<br /><br />';
    echo '<a href='.$rootPath.'createStaff.php>スタッフ登録</a><br />';
    echo '<a href='.$rootPath.'addProduct.php>商品登録</a><br />';
    echo '<a href='.$rootPath.'logout.php>ログアウト</a><br />';
    echo '<br /><br />';
}
