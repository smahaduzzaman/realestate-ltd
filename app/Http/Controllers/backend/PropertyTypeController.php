<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    public function AllTypes()
    {
        $types = PropertyType::latest()->get();
        return view('backend.type.all_types', compact('types'));
    }
}
