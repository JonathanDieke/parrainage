<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Godchild extends Model
{
    use HasFactory;

    // protected $primaryKey = 'register';

    /**
     * Get the godfather that owns the Godchild
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function godfather(): BelongsTo
    {
        return $this->belongsTo(GodFather::class, 'godfather_register', 'register');
    }
}
