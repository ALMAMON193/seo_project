<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * @method static updateOrCreate(array $array, array $validatedData)
 * @method static create(array $validatedData)
 * @method static where(string $string, string $value)
 */
class CMS extends Model
{
    protected $table = 'c_m_s';
    protected $fillable = [
        'page',
        'section',
        'title',
        'sub_title',
        'content',
        'sub_content',
        'image',
        'image_alt',
        'background',
        'background_alt',
        'btn_text',
        'video',
        'status',

    ];
    public function getImageAttribute($value): string|null
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
    public function getBackgroundAttribute($value): string|null
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
    public function getVideoAttribute($value): string|null
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
    public function scopeLocalSeoItems(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageLocalSeoItem')
            ->where('section', 'ServiceSectionLocalSeoItem');
    }
    //keyword research item
   public function scopeKeywordResearchItems(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageKeywordResearchItem')
            ->where('section', 'ServiceSectionKeywordResearchItem');
    }

}
