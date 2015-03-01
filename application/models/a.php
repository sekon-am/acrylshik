<?php
class A {
	var $f=5;
}
$a = new A;
$m = 'f';
echo $a->$m;