<?php

namespace Djmitry\Meta;

class Meta
{
    private static $data = [];

    public static function add(Array $data)
    {
        self::$data = $data;
    }

    public static function show()
    {
        return view('Meta::meta', ['data' => self::$data]);
    }
}