<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // This line allows the form data to be saved to MySQL
    protected $fillable = ['name', 'course', 'year_level'];
}