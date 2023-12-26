<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
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

    public function store(StoreRequest $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'user added successfully.',
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'status'    => 'success',
            'user'      => $user,
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'status'    => 'success',
            'user'      => $user,
        ]);
    }

    public function update($id, UpdateRequest $request)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'status'    => 'success',
            'message'   => 'user updated successfully.',
        ]);
    }


    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'status'     => 'success',
            'message'    => 'User deleted successfully.',
        ]);
    }
}
