<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardList extends Model
{
    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'list_id');
    }

    public function borad(): BelongsTo
    {
        return $this->belongsTo(Borad::class, 'borad_id');
    }
}
