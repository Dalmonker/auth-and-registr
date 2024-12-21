<?php

namespace App\Services;

class Page
{
    public static function part($part_name)
    {
        require_once "views/components/" . $part_name . ".php";
    }
}