<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnposFile extends Model
{
    protected $fillable = ['arquivo', 'user_id'];

    public function snpos()
    {
        return $this->hasMany(Snpo::class);
    }

    use HasFactory;
}
