<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'exam4_prac';

    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'add',
        'dob',
    ];
}
