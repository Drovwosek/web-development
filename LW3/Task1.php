<?php
header("Content-Type: text/plain");

require_once ("modules.php");
$inputText = getQueryStringParameter('text');
if ($inputText === '')
{
    echo 'Введена пустая строка';
}
elseif ($inputText !== null)
{
    echo removeExtraBlanks($inputText);
}
else
{
    echo 'Некорректный ввод данных';
}
