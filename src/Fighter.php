<?php

namespace App;

use App\Shield;
use App\Weapon;

class Fighter
{
    public const MAX_LIFE = 100;

    private string $name;

    private int $strength;
    private int $dexterity;
    private string $image = 'fighter.svg';

    private int $life = self::MAX_LIFE;
    private int $x;
    private int $y;

    protected float $range = 1;


    public function __construct(
        string $name,
        int    $strength = 10,
        int    $dexterity = 5,
        string $image = 'fighter.svg',
        int $x = 0,
        int $y = 0,
    )
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->image = $image;
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getRange(): float
    {
        return $this->range;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function fight(Fighter $adversary): void
    {
        $damage = rand(1, $this->getDamage()) - $adversary->getDefense();
        if ($damage < 0) {
            $damage = 0;
        }
        $adversary->setLife($adversary->getLife() - $damage);
    }

    public function getDamage(): int
    {
        return $this->getStrength();
    }

    /**
     * Get the value of strength
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     */
    public function setStrength($strength): void
    {
        $this->strength = $strength;
    }

    public function getDefense(): int
    {
        return $this->getDexterity();
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    /**
     * Set the value of dexterity
     *
     */
    public function setDexterity($dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * Get the value of life
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     */
    public function setLife(int $life)
    {
        if ($life < 0) {
            $life = 0;
        }
        $this->life = $life;
    }

    public function isAlive(): bool
    {
        return $this->getLife() > 0;
    }
}
