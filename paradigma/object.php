<?php

class People
{
	public function getHello($name)
	{
		return "Hello {$name}";
	}
}

$p = new People;
echo $p->getHello('Guilherme<br>');
echo $p->getHello('Breno<br>');