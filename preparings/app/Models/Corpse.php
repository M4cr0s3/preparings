<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corpse extends Model
{
    use HasFactory;

    protected $table = 'corpses';
    protected $guarded = false;

    protected $fillable = [
        'corpse_number'
    ];

}
