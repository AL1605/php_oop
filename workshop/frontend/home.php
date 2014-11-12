<style>
    .product {
        display: inline-block;
        border: #cccccc 1px solid;
        padding: 8px;
    }
</style>

<h3>สินค้า</h3>
<?php 
include_once '../../ch02/db.php';
include_once '../connect.php';
include_once '../../ch03/TextField.php';
include_once '../../ch03/Form.php';
include_once '../../ch03/ButtonSubmit.php';

$txtSearch = new TextField('txtSearch');
$buttonSearch = new ButtonSubmit('ค้นหาสินค้า...');
$form = new Form();

echo $form->open('index.php?url=home.php');
echo $txtSearch.$buttonSearch;
echo $form->close();

if (empty($_POST)) {
    $rs = $db->findAll('product')->execute();
} else {
    // search
    $keyword = $_POST['txtSearch'];
    $condition = " name LIKE('%$keyword%') OR price LIKE('%$keyword%')";
    $rs = $db->conditions('product', $condition)->execute();
}

while ($r = mysql_fetch_array($rs)) {
    echo "
        <span class='product'>
            <div>{$r[name]}</div>
            <div><img src='../upload/{$r[image]}' width='150px' /></div>
            <div>ราคา: {$r[price]}</div>
            <div><a href='cart_add.php?id={$r[id]}'>Add To Cart</a></div>
        </span>";
}
?>