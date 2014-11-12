<?php

include_once 'RadioGroup.php';

$radioGroup = new RadioGroup();
$radioGroup->name = 'sex';
$radioGroup->add('male', 1);
$radioGroup->add('female', 2);

echo $radioGroup;
?>
