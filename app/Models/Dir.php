<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use DirFile;

class Dir extends Model
{
    use HasFactory;

    /**
     * Get parent directory.
     * @return Builder
     */
    public function parent() {
        return $this->belongsTo(self::class);
    }

    /**
     * Get directory files.
     * @return Builder
     */
    public function files() {
        return $this->hasMany(DirFile::class);
    }

    /**
     * Query scope gets directory files.
     * @return Builder
     */
    public function scopeGetFiles($query) {
        return $query->has('dir_files');
    }
}
