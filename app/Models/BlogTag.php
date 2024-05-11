<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogTag extends Model
{
    use HasFactory, Sortable;
	public $sortable = ['id', 'name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];    
    
    public function multipleBlogTag()
    {
        return $this->hasMany(MultipleBlogTag::class, 'blog_tag_id');
    }
}
