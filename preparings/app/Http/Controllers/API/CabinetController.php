<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CabinetCollection;
use App\Http\Resources\CabinetResource;
use App\Models\Cabinet;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function getAllCabinets()
    {
        $cabinets = Cabinet::query()
            ->with('corpse')
            ->get();

        return new CabinetCollection($cabinets);
    }
}
