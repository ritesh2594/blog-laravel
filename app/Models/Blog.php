<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, Sortable;
	public $sortable = ['id', 'name'];
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
}
