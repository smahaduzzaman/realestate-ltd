<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityTypeController extends Controller
{
    public function AllAmenities()
    {
        $amenities = Amenity::latest()->get();
        return view('backend.amenity.all_amenities', compact('amenities'));
    }

    public function AddAmenity()
    {
        return view('backend.amenity.add_amenity');
    }
}
