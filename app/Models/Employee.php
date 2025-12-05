<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [ //មានន័យ ថា$Filabe នេះគឺuser អាចកែប្រែ ដែកបានដាក់ក្នុងនេះ ក្រៅពីនេះគឺអត់បានទេ
        'name',
        'age',
        'position',
        'salary'
    ];
}
