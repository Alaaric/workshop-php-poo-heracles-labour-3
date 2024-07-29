<?php

namespace App;

class arena
{
    private array $monsters = [];
    private ?Hero $hero = null;
    private int $size;

    public function __construct(array $monsters, Hero $hero) {
        $this->monsters = $monsters;
        $this->hero = $hero;
        $this->size = 10;
    }

    public function touchable(Fighter $attacker, Fighter $target): bool {
        if ($attacker->getRange() >= $this->getDistance($attacker, $target)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2): float {
        return sqrt(($fighter1->getX() - $fighter2->getX())**2 + ($fighter1->getY()- $fighter2->getY())**2);
    }

    /**
     * @return Hero|null
     */
    public function getHero(): ?Hero
    {
        return $this->hero;
    }

    /**
     * @return array
     */
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * @param Hero|null $hero
     */
    public function setHero(?Hero $hero): void
    {
        $this->hero = $hero;
    }

    /**
     * @param array $monsters
     */
    public function setMonsters(array $monsters): void
    {
        $this->monsters = $monsters;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}