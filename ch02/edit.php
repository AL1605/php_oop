<?php
$id = $_GET['id'];
include_once 'db.php';

$db = new db();
$r = $db->findByPk('tb_book', 'id', $id)->executeRow();
?>

<form method="post" action="edit_save.php">
    name: <input type="text" name="name" value="<?=$r['name']?>" /><br />
    price: <input type="text" name="price" value="<?=$r['price']?>" /><br />
    page: <input type="text" name="page" value="<?=$r['page']?>" /><br />
    <input type="hidden" name="id" value="<?=$r['id']?>" />
    <input type="submit" value="Update Record" />
</form>
