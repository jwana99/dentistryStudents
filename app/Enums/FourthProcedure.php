<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class FourthProcedure extends Enum
{
    const Operative = 0;
    const Periodontics = 1;
    const Prosthodontics = 2;
    const Surgery = 3;
}
