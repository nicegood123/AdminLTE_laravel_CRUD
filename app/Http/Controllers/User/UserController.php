<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();

            return DataTables::of($users)
                ->editColumn('created_at', function (User $users) {
                    return Carbon::parse($users->created_at)->isoFormat('DD/MM/YYYY');
                })
                ->addColumn('actions', 'users.components.index.datatable.actions.buttons')

                ->rawColumns(['actions'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('users.index');
    }

    // public function store() {

    // }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        user->delete();

        return response()->json([
            'status'     => 'success',
            'message'    => 'User deleted successfully.',
        ]);
    }
}
