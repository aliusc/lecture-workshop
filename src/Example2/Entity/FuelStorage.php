<?php declare(strict_types=1);

namespace Example2\Entity;

class FuelStorage
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var int */
    private $amount;

    /** @var int */
    private $capacity;

    public function __construct(int $id, string $name, int $amount, int $capacity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
        $this->capacity = $capacity;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }
}