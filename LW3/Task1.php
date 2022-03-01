<?php
$str = '  Margin     in Gooogle   is   8   px   ';
$str = trim($str, '\s');
$str = preg_replace('/\s\s+/', ' ', $str);
echo $str;
