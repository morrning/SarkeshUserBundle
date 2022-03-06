<?php

namespace Sarkesh\Bundle\SarkeshUserBundle;

class SarkeshUserBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
