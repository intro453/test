<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder; //для prunable

class Car extends Model
{
    // protected $table = 'cars';
    // public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    use Prunable;

    protected $fillable = ['make', 'model', 'year', 'color', 'is_sold', 'description']; //возьмет только их остальное выкинет
    // protected $guarded = ['id']; // вместе с fillable нельзя!

    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subMonth());
    }

}
