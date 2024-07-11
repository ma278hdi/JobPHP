<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;

class Tag extends Model
{
    use HasFactory;
    public function jobs(){
        return $this->belongsToMany(Job::class,foreignPivotKey:'job_listings_id');
    }
}
