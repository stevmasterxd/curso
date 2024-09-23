<?php
declare(strict_types=1);

if (! function_exists("show"))
{
    function show(string $message): void
    {
    echo "$message";
    }
}