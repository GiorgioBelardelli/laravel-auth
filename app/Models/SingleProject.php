<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingleProject extends Model
{
    use HasFactory;
    protected $table = 'single_projects'; 
    public function container()
    {
        return $this->belongsTo(Project::class);
    }
}
