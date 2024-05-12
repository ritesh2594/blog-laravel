<?php

namespace App\Models;

use Illuminate\Support\Str;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogTag extends Model
{
    use HasFactory, Sortable;
	public $sortable = ['id', 'name'];
    protected $guarded = ['id', 'created_at', 'updated_at'];    
     
    public function setNameAttribute($value)
    {
        $lowercaseVal = Str::lower($value); // Convert to lowercase
        $capitalizedVal = ucwords($lowercaseVal); // Capitalize the first letter of each word
        $this->attributes['name'] = $capitalizedVal; // Store the modified value
    }
    
    public function setDescriptionAttribute($value)
    {
        $lowercaseVal = Str::lower($value); // Convert to lowercase
        $capitalizedVal = ucwords($lowercaseVal); // Capitalize the first letter of each word

        // Assign the processed value to the model attribute
        $this->attributes['description'] = $capitalizedVal;
    }
    
    public function multipleBlogTag()
    {
        return $this->hasMany(MultipleBlogTag::class, 'blog_tag_id');
    }
}
