<?php
namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Blade;

class Job extends Model{
    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['employer_id','title','salary'];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey:'job_listings_id');
    }
}
