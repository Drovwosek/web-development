<?php
function getQueryStringParameter(string $name): ?string
{
    return $_GET[$name] ?? null;
}

<<<<<<< HEAD
function removeExtraBlanks(string $text): ?string
{
    $resultString = '';
    $blank = true;
    for ($i = 0; $i !== strlen($text); $i++)
    {
        if ($text[$i] !== ' ')
        {
            $resultString .= $text[$i];
            $blank = false;
        }
        else
        {
            if ($blank === false)
            {
                $blank = true;
                $resultString .= ' ';
            }
        }
    }
    return $resultString;
}
=======
>>>>>>> origin/master
