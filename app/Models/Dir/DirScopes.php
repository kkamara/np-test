<?php

namespace App\Models\Dir;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\DirFile\DirFile;

class DirScopes extends Model
{
    /**
     * Query scope gets directory files.
     * @return Builder
     */
    public function scopeGetFiles($query) {
        return $query->has(DirFile::class);
    }
}
