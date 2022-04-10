<?php

namespace Watson\FractalIssue\Transformers;

use Watson\FractalIssue\Models\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['user'];

    protected $defaultIncludes = ['user'];

    public function transform(Comment $comment)
    {
        return [
            'id' => $comment->id,
            'comment' => $comment->comment,
        ];
    }

    public function includeUser(Comment $comment)
    {
        return $this->item($comment->user, new UserTransformer);
    }
}
