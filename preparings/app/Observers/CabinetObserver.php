<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class CabinetObserver
{
    public function created()
    {
        Cache::forget('cabinets');
    }
}
