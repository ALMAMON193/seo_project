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
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

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
    public function scopeScalableSeoSolutionsItems(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageScalableSeoItem')
            ->where('section', 'ServiceSectionScalableSeoItem');
    }
}
