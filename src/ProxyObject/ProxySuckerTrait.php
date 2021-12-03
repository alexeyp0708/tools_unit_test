<?php


namespace Alpa\Tools\UnitTest\ProxyObject;


trait ProxySuckerTrait
{
    public function __invoce($scope=null)
    { 
        return new Proxy($this,SuckerHandlers::class,$scope);
    }
}