<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{

    const Create = 1;
    const OrderReceived = 2;
    const WaitingForDelivery = 3;
    const Complete = 4;
    const Cancel = 5;

}
