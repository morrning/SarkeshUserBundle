<?php

namespace \Sarkesh\Bundle\UserBundle;

class SarkeshUserBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
