<?php

namespace App\Models\DirFile;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dir\Dir;

class DirFileRelations extends Model
{
    /**
     * Get directory.
     * @return Builder
     */
    public function dir() {
        return $this->belongsTo(Dir::class);
    }
}
