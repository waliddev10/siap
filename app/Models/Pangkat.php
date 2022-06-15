<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{

    protected $table = 'pangkat';

    protected $fillable = [
        'nama',
        'golongan'
    ];
}
