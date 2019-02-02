<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    protected $table = "items";

    public function Category(): BelongsTo
    {
        return $this->belongsTo(ItemCategory::class);
    }

    public function Localized(): BelongsTo
    {
        return $this->belongsTo(LocalizedText::class, 'idx');
    }
}
