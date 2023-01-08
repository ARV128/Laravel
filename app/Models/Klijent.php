<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klijent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'broj_pasosa',
        'datum_rodjenja',

    ];


    public function kupovine()
    {
        return $this->hasMany(Kupovina::class);
    }





}
