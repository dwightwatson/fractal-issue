<?php

namespace Watson\FractalIssue\Models;

class Comment
{
    public function __construct(public int $id, public User $user, public string $comment)
    {
        //
    }
}