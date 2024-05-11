<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleBlogTag extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];    
    public function blogTag()
    {
        return $this->belongsTo(BlogTag::class, 'blog_tag_id');
    }
}
