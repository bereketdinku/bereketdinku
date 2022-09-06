<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assem extends Model
{
    use HasFactory;
    protected $fillable = ['name','code','description', 'assignment_type', 'mark','deadline', 'course_id','department'];
}
