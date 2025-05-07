<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
enum Section: string
{
    case HOME_BANNER = 'home_banner';
    case HOME_ABOUT = 'home_about';

    case HOME_SERVICE = 'home_service';
    case HOME_WHO_WE_ARE = 'home_who_are';
    case HOME_WHO_WE_ARE_ITEM = 'home_we_are_are_item';
    case HOME_ABOUT_ITEM = 'home_about_item';
    case SERVICE_BANNER = 'service_banner';
    case SERVICE_LOCAL_SEO = 'service_local_seo';
    case SERVICE_LOCAL_ITEM = 'service_local_item';

    case SERVICE_KEY_WORD_RECHARTER = 'service_key_word_recharter';
    case SERVICE_KEY_WORD_RECHARTER_ITEM = 'service_key_word_recharter_item';
    case CONTACT_BANNER = 'contact_banner';

    case WHY_TRUST = 'why_trust';
    case WHAT_MAKES = 'what_makes';

    case  ABOUT_REAL_EXPERIENCE = 'about_real_experience';
    case  ABOUT_REAL_EXPERIENCE_ITEM = 'about_real_experience_item';
    case  ABOUT_SCALES_ACROSS = 'about_scales_across';
    case  ABOUT_SEO_ESP = 'about_seo_esp';
    case ABOUT_CONTENT_SEO = 'about_content_seo';
    case ABOUT_CONTENT_SEO_APPROACH = 'about_content_seo_approach';
    case ABOUT_CONTENT_SEO_APPROACH_ITEM = 'about_content_seo_approach_item';
    case ABOUT_LOCAL_SEO = 'about_local_seo';
    case ABOUT_LOCAL_SEO_APPROACH = 'about_local_seo_approach';
    case ABOUT_LOCAL_SEO_APPROACH_ITEM = 'about_local_seo_approach_item';


}
