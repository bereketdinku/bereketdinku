<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = ['first','middle','last',
    'father','father_phone','mother','mother_phone','status','gender','age','phone','department','faculity','dob','dor','nationality','country','address'];
    public $table='admissions';
}
