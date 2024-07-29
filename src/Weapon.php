<?php

namespace App;

class Weapon
{

    public function __construct(
        private int $damage = 10,
        private string $image = 'sword.svg',
        private  float $range = 0.5,
    ) {

    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @return float
     */
    public function getRange(): float
    {
        return $this->range;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}