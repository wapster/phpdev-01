<?php

/*
Все методы интерфейса должны быть реализованы.
Но тут у меня ступор.

Т.е. в коде надо делать SQL запрос?


Прочитал несколько статей в Интернете, в целом понятно зачем 
нужны интерфейсы. Но вот на практике никогда их не использовал.
Видимо на простых проектах они не нужны.

*/


class Node implements NodeInterface 
{
    public function __construct(string $name)
    {
    	// ...
    }

    public function __toString(): string
    {
        // ...
    }
    
    public function getName(): string
    {
        // ...
    }

    /**
     * @return Node[]
     */
    public function getChildren(): array;

    public function addChild(Node $node): self;
}
