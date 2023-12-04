<?php declare(strict_types=1);

namespace SwagBasicExample\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1701520682foo extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1701520682;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
        CREATE TABLE IF NOT EXISTS `foo` (
            `id` BINARY(16) NOT NULL,
            `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
            `price` VARCHAR(255) COLLATE utf8mb4_unicode_ci,
            `created_at` DATETIME(3) NOT NULL,
            `updated_at` DATETIME(3),
            PRIMARY KEY (`id`)
        )
            ENGINE = InnoDB
            DEFAULT CHARSET = utf8mb4
            COLLATE = utf8mb4_unicode_ci;
        SQL;
                
        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
