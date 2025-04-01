<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Project;

class Category extends Model
{
    use HasFactory;


    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
