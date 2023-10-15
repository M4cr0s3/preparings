<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;

class ComputerObserver
{
    public function created()
    {
        Cache::forget('computers');
    }
}
