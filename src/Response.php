<?php

namespace Watson\FractalIssue;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Watson\FractalIssue\Models\Comment;
use Watson\FractalIssue\Models\User;
use Watson\FractalIssue\Transformers\CommentTransformer;

class Response
{
    protected Manager $fractal;

    public function __construct()
    {
        $this->fractal = (new Manager)->setSerializer(new RootSerializer);
    }

    public function __invoke()
    {
        $user = new User(id: 2, name: 'dwight');
        $comment = new Comment(id: 1, user: $user, comment: 'comment');

        $resource = new Item($comment, new CommentTransformer, 'data');

        $scope = $this->fractal->createData($resource);

        return $scope->toArray();
    }
}