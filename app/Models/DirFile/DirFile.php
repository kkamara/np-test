<?php

namespace App\Models\DirFile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirFile extends Model
{
    use HasFactory;
    use DirFileRelations;
    use DirFileScopes;

    /**
     * Fillable data
     * @var Array
     */
    protected $fillable = ['name'];

    /**
     * @return String
     */
    public function getFullPathAttribute() {
        return $this->name;
    }
}
