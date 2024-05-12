<?php

namespace App\Models;

use Illuminate\Support\Str;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Sortable;
    public $sortable = ['id', 'title','page_title','blog_categories_id','url','created_at'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = [
        'user_id',
        'title',
        'url',
        'page_title',
        'description',
        'blog_categories_id',
        'image',
    ];
    public function setTitleAttribute($value)
    {
        $lowercaseVal = Str::lower($value); // Convert to lowercase
        $capitalizedVal = ucwords($lowercaseVal); // Capitalize the first letter of each word
        $this->attributes['title'] = $capitalizedVal; // Store the modified value
    }
    
    public function setUrlAttribute($value)
    {
        // Convert to lowercase
        $lowercaseVal = Str::lower($value);
        // Add hyphen in each word
        $hyphenatedVal = Str::slug($lowercaseVal, '-');
        $this->attributes['url'] = $hyphenatedVal;
    }

    public function setPageTitleAttribute($value)
    {
        $lowercaseVal = Str::lower($value); // Convert to lowercase
        $capitalizedVal = ucwords($lowercaseVal); // Capitalize the first letter of each word
        $this->attributes['page_title'] = $capitalizedVal; 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'blog_categories_id');
    }
    public function multipleBlogTag()
    {
        return $this->hasMany(MultipleBlogTag::class);
    }
    public function tags()
    {
        return $this->belongsToMany(MultipleBlogTag::class);
    }
}
