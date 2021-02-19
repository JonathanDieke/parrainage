<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Godfather extends Model
{
    use HasFactory;

    protected $primaryKey = 'register';
    // protected $primaryKey = null;
    public $incrementing = false;

    /**
     * Get all of the godchildren for the godfather
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function godchildren(): HasMany
    {
        return $this->hasMany(GodChild::class, 'godfather_register', 'register');
    }
}
