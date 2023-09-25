<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Director;

class Category extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

   
}
