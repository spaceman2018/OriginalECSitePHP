<?php
$rootPath = "";
include($rootPath.'header.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>トップページ</title>
</head>

<body>

  <h1>トップページ</h1>

  <?php
    echo '<a href="./product/productList.php">商品一覧を見る</a>';
    echo '<br /><br />';
    echo '<a href="./user/cart.php">カートを見る</a>';
    echo '<br /><br />';
    echo '<a href="./user/myPage.php">マイページ</a>';
?>

</body>

</html>
