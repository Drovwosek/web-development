<?php
function getQueryStringParameter(string $name): ?string
{
    return $_GET[$name] ?? null;
}

