<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory, Sortable;
	public $sortable = ['id', 'name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    // public function multipleBlogCategories()
    // {
    //     return $this->hasMany(MultipleBlogCategory::class, 'blog_categories_id');
    // }
}
