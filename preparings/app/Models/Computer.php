<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    protected $table = 'computers';

    protected $guarded = false;

    protected $fillable = [
        'specs',
        'cabinet_id'
    ];

    public function cabinet()
    {
        return $this->belongsTo(Cabinet::class);
    }
}
