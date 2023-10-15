<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabinet extends Model
{
    use HasFactory;

    protected $table = 'cabinets';
    protected $guarded = false;

    protected $fillable = [
        'cabinet_number',
        'corpse_id'
    ];

    public function corpse()
    {
        return $this->belongsTo(Corpse::class);
    }
}
