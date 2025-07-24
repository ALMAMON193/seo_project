<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validate)
 */
class Contact extends Model
{
    protected $fillable = [
        'fname', 'lname', 'email', 'phone', 'company_name', 'subject', 'message'
    ];
}
