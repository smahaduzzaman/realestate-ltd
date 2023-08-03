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

    public function StoreAmenity(Request $request)
    {
        $request->validate([
            'amenity_name' => 'required|unique:amenities,amenity_name',
        ]);

        Amenity::insert([
            'amenity_name' => $request->amenity_name,
        ]);

        $notification = array(
            'message' => 'Amenity Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.amenities')->with($notification);
    }

    public function EditAmenity($id)
    {
        $amenity = Amenity::findOrFail($id);
        return view('backend.amenity.edit_amenity', compact('amenity'));
    }

    public function UpdateAmenity(Request $request, $id)
    {
        $request->validate([
            'amenity_name' => 'required|unique:amenities,amenity_name',
        ]);

        Amenity::findOrFail($id)->update([
            'amenity_name' => $request->amenity_name,
        ]);

        $notification = array(
            'message' => 'Amenity Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.amenities')->with($notification);
    }

    public function DeleteAmenity($id)
    {
        Amenity::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Amenity Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.amenities')->with($notification);
    }
}
