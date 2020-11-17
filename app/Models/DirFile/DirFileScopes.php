<?php

namespace App\Models\DirFile;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dir\Dir;

class DirFileScopes extends Model
{
    /**
     * Query scope gets directory belonging to.
     * @return Builder
     */
    public function scopeGetDir($query) {
        return $query->belongsTo(Dir::class);
    }
}
