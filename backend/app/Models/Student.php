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
}
