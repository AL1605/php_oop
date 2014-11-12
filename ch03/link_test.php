<?php

include_once 'Link.php';
$link = new Link();
$link->label = 'my Link';
$link->url = 'radio_test.php';
$link->params = 'x=10&y=20';

echo $link;
?>
