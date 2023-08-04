<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission', compact('permissions'));
    }

    public function AddPermission()
    {
        return view('backend.pages.permission.add_permission');
    }

    public function StorePermission(Request $request)
    {

        $permissions = Permission::create([
            'name' => $request->name,
            'guard_name' => 'web', // or 'web
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }

    public function EditPermission($id)
    {
        $permission = Permission::find($id);
        return view('backend.pages.permission.edit_permission', compact('permission'));
    }

    public function UpdatePermission(Request $request, $id)
    {
        $permission = Permission::find($id);
        $permission->name = $request->name;
        $permission->group_name = $request->group_name;
        $permission->save();

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }

    public function DeletePermission($id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }

    public function ImportPermission()
    {
        return view('backend.pages.permission.import_permission');
    }

    public function allRole(Request $request)
    {
        $roles = Role::all();
        return view('backend.pages.role.all_role', compact('roles'));
    }

    public function addRole(Request $request)
    {
        $roles = Role::all();
        return view('backend.pages.role.add_role', compact('roles'));
    }

    public function storeRole(Request $request)
    {
        Role::create([
            'name' => $request->name,
            'guard_name' => 'web', // or 'web
        ]);

        $notification = array(
            'message' => 'Role Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role')->with($notification);
    }

    public function editRole($id)
    {
        $role = Role::find($id);
        return view('backend.pages.role.edit_role', compact('role'));
    }

    public function updateRole(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role')->with($notification);
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();

        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.role')->with($notification);
    }
}
