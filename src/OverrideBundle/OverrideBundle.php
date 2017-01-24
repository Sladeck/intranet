<?php

namespace OverrideBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OverrideBundle extends Bundle
{

  public function getParent()
    {
        return 'FOSUserBundle';
    }

}
