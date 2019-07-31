<?php

namespace App\Models\Auth;

class UserQuery extends QueryBuilder
{
    public function findByEmail($email)
    {
        return $this->where(compact('email'))->first();
    }


}
