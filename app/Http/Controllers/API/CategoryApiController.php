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


class CategoryApiController extends Controller
{
    // Listar todos los eventos
    public function index()
    {
        $categories = Category::all(); // Obtén todas las categorías
        return response()->json($categories);
    }
}
