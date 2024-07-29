<?php

namespace App;

use App\Fighter;

class Hero extends Fighter
{

    private ?Weapon $weapon = null;
    private ?Shield $shield = null;

    public function __construct(
        string $name,
        int    $strength = 10,
        int    $dexterity = 5,
        string $image = 'fighter.svg',
        int $x = 0,
        int $y = 0,
    )
    {
        parent::__construct($name, $strength, $dexterity, $image, $x, $y);
    }

    public function getRange(): float
    {
        return parent::getRange() + $this->weapon->getRange();
    }

    public function getDamage(): int
    {
        return $this->getWeapon()->getDamage() + $this->getStrength();
    }

    /**
     * Get the value of weapon
     */
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     */
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getDefense(): int
    {
        return $this->getShield()->getProtection() + $this->getDexterity();
    }

    /**
     * Get the value of shield
     */
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     */
    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }
}