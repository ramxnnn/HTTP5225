<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    use softDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'fname',
        'lname',
        'email'
    ];
}
