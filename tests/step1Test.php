<?php

// Include our index page
require_once __DIR__.'/../index.php';

use PHPUnit\Framework\TestCase;

final class Step1Test extends TestCase
{
    public function testArrayLength() : void
    {
        global $array;
        $this->assertCount(2, $array);
    }
}

