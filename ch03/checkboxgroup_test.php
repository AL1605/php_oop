<?php

include_once 'CheckboxGroup.php';

$checkboxGroup = new CheckboxGroup();
$checkboxGroup->name = 'book';
$checkboxGroup->add('JAVA', 1);
$checkboxGroup->add('PHP', 2);
$checkboxGroup->add('C#', 3);
$checkboxGroup->add('C/C++', 4);

echo $checkboxGroup;
?>
