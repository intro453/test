<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // protected $table = 'cars';
    // public $timestamps = false;
    use HasFactory;

    protected $fillable = ['make', 'model', 'year']; //возьмет только их остальное выкинет
    // protected $guarded = ['id']; // вместе с fillable нельзя!



}
