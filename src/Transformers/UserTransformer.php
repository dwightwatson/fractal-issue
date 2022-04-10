<?php

namespace Watson\FractalIssue\Transformers;

use Watson\FractalIssue\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
        ];
    }
}
