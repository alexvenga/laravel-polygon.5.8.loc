<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class blogcategory
 * @package App\Models
 *
 * @property string $slug
 * @property string $title
 * @property string $description
 *
 * @property-read BlogCategory $parentCategory
 * @property-read string $parentTitle
 *
 */
class BlogCategory extends Model
{
    use SoftDeletes;

    const ROOT = 1;

    protected $fillable = [
        'parent_id',
        'slug',
        'title',
        'description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'parent_id', 'id');
    }

    /**
     * Accessor
     *
     * @url https://laravel.com/docs/5.8/eloquent-mutators
     *
     * @return string
     */
    public function getParentTitleAttribute()
    {
        $title = $this->parentCategory->title ??
            ($this->isRoot()
                ? 'Корень'
                : '???'
            );

        return $title;
    }


    /**
     * @return bool
     */
    public function isRoot()
    {
        return $this->id === self::ROOT
            ? true
            : false;
    }

}
