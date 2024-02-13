<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::with('roles')->paginate(8);
        $roles = Role::all();
        return view('admin.allusers', compact('users', 'roles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'role' => 'required'
        ]);
        $role = Role::find($request->role);
        $user = User::find($id);

        $user->syncRoles($role->name);

        return redirect('allusers')->with('success', 'Role Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        $user = User::find($id);
////        $user->delete();
//
////        return view('admin.allusers', compact('user'));
//        return redirect()->route('allusers')->with('delete', 'User supprimé avec succès.');
//
//    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully!');

    }

//    public function restorePost($id)
//    {
//        $user = User::withTrashed()->find($id);
//        $user->restore();
//        return redirect()->back()->with('success', 'User restored successfully!');
//
//    }
}
