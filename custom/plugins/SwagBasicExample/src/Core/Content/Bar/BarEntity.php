<?php declare(strict_types= 1);

namespace SwagBasicExample\Core\Content\Bar;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class BarEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $name;

    protected ?string $price;

    
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    
    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }
}