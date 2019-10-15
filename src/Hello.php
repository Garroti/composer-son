<?php

namespace Garroti\Curso;

class Hello 
{
    public function say(string $name)
    {
        return sprintf('Hello %s', $name);
    }
}