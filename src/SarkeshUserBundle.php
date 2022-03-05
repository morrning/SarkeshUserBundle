<?php

namespace App\Sarkesh\UserBundle\src;

class SarkeshUserBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
{

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}