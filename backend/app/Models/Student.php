<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'students';

    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        
    ];

    public function enrollCourse()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'student_id', 'course_id');
    }

}
