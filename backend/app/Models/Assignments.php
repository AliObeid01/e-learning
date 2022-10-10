<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'assignments';

    protected $fillable = [
        'title',
        'course_id',

        
    ];

    public function enrollCourse()
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'student_id', 'course_id');
    }

    public function course()
    {
        return $this->belongsto(Course::class);
    }
}
