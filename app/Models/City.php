<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    public function state():BelongsTo
    {
        return $this->belongsTo(State::class);
    }
    public function employee():BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
