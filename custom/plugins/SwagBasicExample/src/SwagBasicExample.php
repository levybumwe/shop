<?php declare(strict_types=1);

namespace SwagBasicExample;

use Shopware\Core\Framework\Plugin;

class SwagBasicExample extends Plugin
{
    public function getMigrationNamespace():string
    {
        return 'Swag\BasicExample\Migration';
    }
}