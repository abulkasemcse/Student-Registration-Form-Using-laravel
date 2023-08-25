<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $fillable = ['title', 'name', 'bday', 'age', 'gender','phone', 'address', 'email', 'password', 't&c'];
}
