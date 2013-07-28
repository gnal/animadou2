<?php

namespace Dog\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DogAdminBundle extends Bundle
{
    public function getParent()
    {
        return 'MsiAdminBundle';
    }
}
