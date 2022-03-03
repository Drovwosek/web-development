<?php
header("Content-Type: text/plain");
require_once('modules.php');

$mail = getQueryStringParameter('mail');
$first_name = getQueryStringParameter('first_name');
$last_name = getQueryStringParameter('last_name');
$age = getQueryStringParameter('age');

if ($mail !== null || strlen($mail) > 0)
{
    $file = 'data/' . $mail . '.txt';
    if (file_exists('data/'))
    {
        mkdir('data/', 0777, true);
    }
    $info = array
    (
        'mail' => $mail,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'age' => $age
    );
    $info = serialize($info);
    file_put_contents( $file, $info);
    echo'инфа за щекой, проверяй ';
    echo $info;

}
else
{
    echo'RODIPIT';
}
