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
        'designation'
    ];

    //content seo
    public function scopeContentSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageContentSeo')
            ->where('section', 'ServiceSectionContentSeo');
    }
    //e-commerce seo
    public function scopeEcommerceSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageECommerceSeo')
            ->where('section', 'ServiceSectionECommerceSeo');
    }
    //enterprise seo
    public function scopeEnterpriseSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageEnterpriseSeo')
            ->where('section', 'ServiceSectionEnterpriseSeo');
    }
    //scalable seo
    public function scopeScalableSeoSolutions(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageScalableSeo')
            ->where('section', 'ServiceSectionScalableSeo');
    }
    //local seo
    public function scopeDataAnalysis(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageDataAnalysisSeo')
            ->where('section', 'ServiceSectionDataAnalysisSeo');
    }

    //local seo
    public function scopeLocalSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageLocalSeo')
            ->where('section', 'ServiceSectionLocalSeo');
    }
    //local seo item
    public function scopeLocalSeoItems(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageLocalSeoItem')
            ->where('section', 'ServiceSectionLocalSeoItem');
    }
    //keyword research
    public function scopeKeywordResearch(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageKeywordResearch')
            ->where('section', 'ServiceSectionKeywordResearch');
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
    //on page optimization
    public function scopeOnPageOptimization(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageOnePageOptimizationSeo')
            ->where('section', 'ServiceSectionOnePageOptimizationSeo');
    }
    //service banner
    public function scopeServiceBannerSection(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageBanner')
            ->where('section', 'ServiceSectionBanner');
    }
    //technology
    public function scopeTechnicalSeo(Builder $query): Builder
    {
        return $query->where('page', 'ServicePageTechnicalSeo')
            ->where('section', 'ServiceSectionTechnicalSeo');
    }

    //home banner
    public function scopeHomeBanner(Builder $query): Builder
    {
        return $query->where('page', 'HomePageBanner')
            ->where('section', 'HomeSectionBanner');
    }
    // home about
    public function scopeHomeAboutUS(Builder $query): Builder
    {
        return $query->where('page', 'HomePageAboutUS')
            ->where('section', 'HomeSectionAboutUS');
    }
    //home about us item
    public function scopeHomeAboutUSItems(Builder $query): Builder
    {
        return $query->where('page', 'HomePageAboutUSItem')
            ->where('section', 'HomeSectionAboutUSItem');
    }
    //home we trust
    public function scopeHomeWhyTrust(Builder $query): Builder
    {
        return $query->where('page', 'HomePageWhyTrustWithUs')
            ->where('section', 'HomeSectionWhyTrustWithUs');
    }
    //about banner
    public function scopeAboutBanner(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageBanner')
            ->where('section', 'AboutSectionBanner');
    }
    //SEO ESP
    public function scopeAboutSeoEsp(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageSeoEsp')
            ->where('section', 'AboutSectionSeoEsp');
    }
    //real Experience
    public function scopeAboutRealExperience(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageRealExperience')
            ->where('section', 'AboutSectionRealExperience');
    }
    //seo scales
    public function scopeAboutScalesAcross(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageSalesAcross')
            ->where('section', 'AboutSectionSalesAcross');
    }
    //my work
    public function scopeAboutMyWork(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageMyWork')
            ->where('section', 'AboutSectionMyWork');
    }
    //my work items
    public function scopeAboutMyWorkItems(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageMyWorkItem')
            ->where('section', 'AboutSectionMyWorkItem');
    }
    //about scopeAboutEspApart
    public function scopeAboutEspApart(Builder $query): Builder
    {
        return $query->where('page', 'AboutPageEspApart')
            ->where('section', 'AboutSectionEspApart');
    }
}
