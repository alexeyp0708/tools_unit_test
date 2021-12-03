<?php


namespace Alpa\Tools\Tests\UnitTest\Sucker\Fixtures;


class MyClass
{
    use MyTrait {
        method as private private_method;
    }

    private function method3()
    {
        return 'hello';
    }

    private static function method4()
    {
        return 'hello';
    }
}