<?php

namespace App\Models\Auth;

class Role
{
    public static function getList()
    {
        return ['admin', 'user'];
    }
}
