<?php


namespace Alpa\Tools\Tests\UnitTest\Sucker\Fixtures;


trait MyTrait
{
    private string $prop = 'success';

    public function method(): string
    {
        return 'success';
    }

    public function method2()
    {
    }
}