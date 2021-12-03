<?php


namespace Alpa\Tools\Tests\UnitTest\Sucker\Fixtures;


class Sucker extends \Alpa\Tools\UnitTest\Sucker\Sucker
{
    public \Closure $runner;
    public static object $actions;
    public $target;

    public static function initActions()
    {
        parent::initActions();
    }
}