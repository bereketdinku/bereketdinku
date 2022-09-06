<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roll extends Model
{
   use SoftDeletes;
    use HasFactory;
    public $fillable=[
   'student_id','username','password','login_time','logout_time'
    ];
}
