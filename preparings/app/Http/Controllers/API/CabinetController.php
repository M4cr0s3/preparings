<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CabinetCollection;
use App\Models\Cabinet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CabinetController extends Controller
{
    /**
     * @return CabinetCollection
     */
    public function getAllCabinets(): CabinetCollection
    {
        return new CabinetCollection(Cache::remember('cabinets', 60 * 60 * 24, function () {
            return Cabinet::query()->with('corpse')->get();
        }));
    }
}
