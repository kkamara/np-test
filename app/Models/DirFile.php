<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dir;

class DirFile extends Model
{
    use HasFactory;

    /**
     * Fillable data
     * @var Array
     */
    private array $fillable = ['name'];

    /**
     * Get directory.
     * @return Builder
     */
    public function dir() {
        return $this->belongsTo(Dir::class);
    }

    /**
     * Query scope gets directory belonging to.
     * @return Builder
     */
    public function scopeGetDir($query) {
        return $query->belongsTo('dir');
    }
}
