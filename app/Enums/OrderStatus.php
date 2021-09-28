<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum implements LocalizedEnum
{
    const CREATED = 1;
    const PAID = 2;
    const IN_DELIVERY = 3;
    const COMPLETED = 4;
    const CANCELED = 5;
}
