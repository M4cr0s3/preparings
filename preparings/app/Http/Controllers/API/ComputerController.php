<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComputerCollection;
use App\Http\Resources\ComputerResource;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ComputerController extends Controller
{
    /**
     * @return ComputerCollection
     */
    public function getAllComputers(): ComputerCollection
    {
        return new ComputerCollection(Cache::remember('computers', 60 * 60 * 24, function () {
            return Computer::query()->with('cabinet')->get();
        }));
    }

    /**
     * @param $id
     * @return ComputerCollection
     */
    public function getExactComputer($id): ComputerCollection
    {
        return new ComputerCollection(Cache::remember('computer_' . $id, 60 * 60, function () use ($id) {
            return Computer::query()
                ->with('cabinet')
                ->where('id', '=', $id)
                ->get();
        }));
    }
}
