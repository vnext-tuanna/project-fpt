<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryJob extends Model
{
    use HasFactory;
    protected $table = 'category_jobs';
    public $fillable = ['name'];
    public function jobs(){
        return $this->hasMany(Job::class, 'category_id');
    }
}
