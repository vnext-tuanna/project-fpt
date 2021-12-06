<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    public $fillable = [
        'title',
        'salary',
        'amount',
        'experience',
        'expired_date',
        'description',
        'category_id'
    ];
    public function category(){
        return $this->belongsTo(CategoryJob::class);
    }
    public function cvs(){
        return $this->hasMany(CV::class);
    }
}
