<?php

namespace Serialken\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SerialkenUserBundle extends Bundle
{
    
    public function getParent() 
    {    
        return 'FOSUserBundle';
    }
}
