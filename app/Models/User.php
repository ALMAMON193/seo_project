<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Panel;
use Filament\Models\Contracts\HasName;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, SoftDeletes, Notifiable;

    public mixed $gender;
    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'otp',
        'otp_expires_at',
        'email_verified_at',
        'reset_password_token',
        'reset_password_token_expire_at',
        'is_otp_verified',
        'deleted_at',
        'created_at',
        'updated_at',
        'role',
        'status',

        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'otp_expires_at' => 'datetime',
            'is_otp_verified' => 'boolean',
            'reset_password_token_expires_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getAvatarAttribute($value): string|null
    {
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }
        // Check if the request is an API request
        if (request()->is('api/*') && !empty($value)) {
            // Return the full URL for API requests
            return url($value);
        }

        // Return only the path for web requests
        return $value;
    }
}
