<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Course extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'courses';

    protected $fillable = [
        'name',
        'instructor_id',
    ];

    public function instructor()
    {
        return $this->belongsto(Instructor::class);
    }

    public function studentEnroll()
    {
        return $this->belongsToMany(Student::class, 'enrollments', 'course_id', 'student_id');
    }
}
