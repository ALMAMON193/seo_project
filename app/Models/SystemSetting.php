<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static latest(string $string)
 * @method static firstOrNew()
 * @method static first()
 */
class SystemSetting extends Model
{
    protected  $guarded = [];
}
