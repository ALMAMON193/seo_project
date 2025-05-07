<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
enum Page: string
{
    case HOME = 'home_page';

    case CONTACT = 'contact';

    case SERVICE = 'service';

    case ABOUT = 'about';

}
