<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    public function state(): HasMany
    {
        return $this->hasMany(State::class);
    }
    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    public function team()
    {
        return $this->hasMany(Team::class);
    }
}
