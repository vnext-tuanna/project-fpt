<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;

    protected $table = 'cvs';
    public $fillable = ['name', 'email', 'cv', 'job_id'];
    public function job(){
        return $this->belongsTo(Job::class, 'job_id');
    }
}
