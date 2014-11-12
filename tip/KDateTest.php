<?php

include_once 'KDate.php';
echo KDate::date().'<br />';
echo KDate::dateThai().'<br />';
echo KDate::mysqlToThai('2012-04-01');
echo KDate::now().'<br />';
echo KDate::nowThai().'<br />';
echo KDate::thaiToMySQL('01/04/2012');
?>
