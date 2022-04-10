<?php

namespace Watson\FractalIssue\Models;

class User
{
    public function __construct(public int $id, public string $name)
    {
        //
    }
}