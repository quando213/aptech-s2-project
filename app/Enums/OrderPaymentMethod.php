<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderPaymentMethod extends Enum implements LocalizedEnum
{
    const BANK_TRANSFER = 1;
    const VN_PAY = 2;
}
