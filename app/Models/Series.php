<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Series extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function seasons ()
    {
        return $this->hasMany(Season::class);
    }

    public static function booted () 
    {
        self::addGlobalScope(function (Builder $queryBuilder) {
            $queryBuilder->orderBy('name');
        });
    }
}
