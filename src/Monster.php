<?php

namespace App;

use App\Fighter;

class Monster extends Fighter
{

    public function __construct(
        string $name,
        int $strength = 10,
        int $dexterity = 5,
        string $image = 'fighter.svg',
        int $x = 0,
        int $y = 0,
    )
    {
        parent::__construct($name, $strength, $dexterity, $image, $x, $y);
    }

}