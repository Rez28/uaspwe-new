<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type'];

    /**
     * Relasi dengan tabel atlets.
     */
    public function atlets()
    {
        return $this->hasMany(Atlet::class);
    }
}
