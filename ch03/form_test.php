<?php
include_once 'Form.php';

$form = new Form();
echo $form->open('form_test.php');
?>

name = <input type="text" name="mytext" />
<input type="submit" value="Send" />
<?php echo $form->close(); ?>

<!-- show data -->
<?php
if (!empty($_POST)) {
    echo $_POST['mytext'];
}
?>
