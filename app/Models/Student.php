<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //add name and grade to fillable
    protected $fillable = [
        'name',
        'grade',
    ];
}
