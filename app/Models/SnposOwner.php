<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SnposOwner extends Model
{
    protected $fillable = ['nome'];

    public function snpos()
    {
        return $this->hasMany(Snpo::class);
    }

    use HasFactory;
}
