<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'last_name',
        'age',
        'email',
        'sex'
    ];
}
