<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function containedItems()
    {
        return $this->hasMany(SingleProject::class,'projects_id',);
    }
}
