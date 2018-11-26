<?php
include($_SERVER['DOCUMENT_ROOT'].'/index/OriginalECSitePHP/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/index/OriginalECSitePHP/class/MCategory.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/index/OriginalECSitePHP/class/Product.php');

$mCategory = new MCategory();
$mCategoryList = $mCategory->getMCategoryList();

$product = new Product();
$products = $product->getAllProduct();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>商品一覧</title>
</head>

<body>

  <h1>商品一覧</h1>

  商品検索<br />
  <form method="post" action="/index/OriginalECSitePHP/product/searchProduct.php">
    <input type="text" name="keywordsList" style="width:200px">
    <select name="category_id">
      <?php foreach ($mCategoryList as $mCategory2) : ?>
        <option value="<?php echo $mCategory2['category_id'] ?>"><?php echo $mCategory2['category_description'] ?></option>
      <?php endforeach ?>
    </select>
    <input type="submit" value="検索">
  </form>

  <table border="1">
    <tr>
      <td>商品名</td>
      <td>商品名(かな)</td>
      <td>価格</td>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
      <td>
        <a href="/index/OriginalECSitePHP/product/productDetail.php?product_id=<?php echo $product['product_id'] ?>">
          <?php echo $product['product_name'] ?>
        </a>
      </td>
      <td>
        <a href="/index/OriginalECSitePHP/product/productDetail.php?product_id=<?php echo $product['product_id'] ?>">
        <?php echo $product['product_name_kana'] ?>
      </a>
      </td>
      <td>
        <a href="/index/OriginalECSitePHP/product/productDetail.php?product_id=<?php echo $product['product_id'] ?>">
          <?php echo $product['price'] ?>円
        </a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>

</body>

</html>
