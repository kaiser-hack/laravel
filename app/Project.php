<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Project extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function category(){

       return $this->belongsTo(Category::class, 'category_id');
    }
}
