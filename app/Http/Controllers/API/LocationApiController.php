<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Location;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;


class LocationApiController extends Controller
{
    // Listar todos los eventos
    public function index()
    {
        
        $locations = Location::all(); 
        return response()->json($locations);
    }
}
