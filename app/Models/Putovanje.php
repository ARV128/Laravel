<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putovanje extends Model
{
    use HasFactory;


    protected $fillable = [
        'destinacija',
        'broj_dana',
        'prevoz',
        'cena',

    ];

    public function kupovine()
    {
        return $this->hasMany(Kupovina::class);
    }






}
