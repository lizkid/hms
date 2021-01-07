<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permission;

class permissionController extends Controller
{
    public function permissionStore(Request $request)
    {
        $data = new permission();
        $data->name = $request->name;
        $data->save();
        return view('permissionList');
    }

    public function showPermission()
    {
        $data = permission::paginate(4);
        return view('permission.permissionList', ['permissions'=>$data]);
    }



    public function destroy($id)
    {
        $data = permission::find($id);
        $data->delete();
    }
}
