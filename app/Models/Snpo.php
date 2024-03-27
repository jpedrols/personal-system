<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snpo extends Model
{
    protected $fillable = ['snpos_file_id', 'snpos', 'bruto', 'liquido'];

    public function snposFile()
    {
        return $this->belongsTo(SnposFile::class);
    }

    use HasFactory;
}
