<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kupovina extends Model
{
    use HasFactory;
    protected $fillable = [
        'datum',
        'klijent_id',
        'putovanje_id' ,
    ];


    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }

    public function putovanje()
    {
        return $this->belongsTo(Putovanje::class);
    }




}
