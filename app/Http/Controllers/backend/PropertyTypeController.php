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

    public function AddType(Request $request)
    {
        return view('backend.type.add_type');
    }

    public function StoreType(Request $request)
    {
        $request->validate([
            'type_name' => 'required|unique:property_types|max:255',
            'type_icon' => 'required',
        ]);

        PropertyType::insert([
            'type_name' => $request->type_name,
            'type_icon' => $request->type_icon,
            'created_at' => now(),
        ]);

        $notification = array(
            'message' => 'Property Type Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.types')->with($notification);
    }
}
