<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
     protected $fillable = ['fullname','sid','tid','course', 'course_id','mark','grade'];

}
