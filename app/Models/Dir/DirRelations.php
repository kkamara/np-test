<?php

namespace App\Models\Dir;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\DirFile\DirFile;

class DirRelations extends Model
{
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
}
