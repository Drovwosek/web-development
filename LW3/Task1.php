<?php
//$text = "    Помогите,    нас    разделяют   пробелы   ";
//echo trim($text);
$str = preg_replace('/\s+/', ' ', $str);
echo ($str);
