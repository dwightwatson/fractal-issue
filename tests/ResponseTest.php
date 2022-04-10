<?php

namespace Watson\FractalIssue\Tests;

use PHPUnit\Framework\TestCase;
use Watson\FractalIssue\Response;

class ResponseTest extends TestCase
{
    public function test_it_returns_correct_response()
    {
        $response = new Response;

        $result = $response();

        $this->assertEquals([
            'data' => [
                'id' => 1,
                'comment' => 'comment',
                'user' => [
                    'id' => 2,
                    'name' => 'dwight',
                ],
            ],
        ], $result);
    }
}