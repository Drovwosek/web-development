<?php
header("Content-Type: text/plain");

function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]);  //? $_GET[$name] : null;
}

$inputText = getQueryStringParameter('identifier');

if (strlen($inputText) > 0)
{
    checkIndentifier($inputText);
}
else
{
    echo 'incorrect INPUT';
}

function checkIndentifier(string $identifier)
{
    $hasErrors = false;
    if (!is_numeric($identifier[0]))
    {
        for ($i = 0; $i < strlen($identifier); $i++)
        {
            if (!is_numeric($identifier[$i]) && !ctype_alpha($identifier[$i]))
            {
                echo 'it is cant be in identifier ' . "'" . $identifier[$i] . "'.\n";
                $hasErrors = true;
            }
        }
    }
    else
    {
        echo "identifier cant start from number.\n";
        $hasErrors = true;
    }
    echo $hasErrors ? 'no' : 'yes';
}
