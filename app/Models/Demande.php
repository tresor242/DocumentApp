<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'etat',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
