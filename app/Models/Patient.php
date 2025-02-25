<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Patient extends Model
{
    use HasFactory;
    public function owner(): BelongsTo
    {
        return $this->BelongsTo(Owner::class);
    }

    public function treatment(): HasMany
    {
        return $this->HasMany(Treatment::class);
    }
}
