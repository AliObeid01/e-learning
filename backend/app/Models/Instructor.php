<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'instructors';

    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        
    ];
    
    public function course()
    {
        return $this->embedsMany(Course::class);
    }
}
