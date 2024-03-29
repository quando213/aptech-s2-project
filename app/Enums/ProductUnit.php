<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;


final class ProductUnit extends Enum implements LocalizedEnum
{
    const Kilogram =   1;
    const Gam =   2;
    const Liter = 3;
    const MiniLiter = 4;
    const Item = 5;
}
