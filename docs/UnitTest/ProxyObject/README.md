
# Alpa\Tools\UnitTest\ProxyObject

The component provides access to private and protected members of an object / class through a proxy object.
In order to obtain private members of an object / class, the [Alpa\Tools\ UnitTest\Sucker](/docs/UnitTest/Sucker/README.md) component is used. And for syntactic sugar, the [Alpa\Tools\ProxyObject](https://github.com/alexeyp0708/php_tools_proxy_object) component is used.

```php
<?php
class A{
	private $a=1;
	private function method(){
		return $this->a;
	}
}
class B extends A{
	private $a=2;
	public $b=2;
}
$obj=new B();
$proxy = new Alpa\Tools\UnitTest\ProxyObject\Proxy($obj);
echo $proxy->a;// 2
echo $proxy(A::class)->a; //1
$proxy(A::class)->a=11;
echo $proxy(A::class)->method();//11
echo isset($proxy->a);//true
echo isset($proxy(A::class)->a);//true
foreach($proxy as $key=>$value){
	// 'a'=>2
	// 'b'=>2
}
foreach($proxy(A::class) as $key=>$value){
	// 'a'=>11
	// 'b'=>2	
}
unset($proxy->a);
unset($proxy(A::class)->a);

```
Working with static properties
```php
<?php
class A{
	private static $a=1;
	private static function  method(){
		return self::$a;
	}
}
class B extends A{
	private static $a=2;
	public static $b=2;
}
$proxy = new Alpa\Tools\UnitTest\ProxyObject\Proxy(B::class);
echo $proxy->a;// 2
echo $proxy(A::class)->a; //1
$proxy(A::class)->a=11;
echo $proxy(A::class)->method();//11
echo isset($proxy->a);//true
echo isset($proxy(A::class)->a);//true
foreach($proxy as $key=>$value){
	// 'a'=>2
	// 'b'=>2
}
foreach($proxy as $key=>$value){
	// 'a'=>11
	// 'b'=>2	
}
```

