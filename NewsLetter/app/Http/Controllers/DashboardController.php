<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\NewsLetter;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function total()
    {
        $totalUsers = User::all()->count();
        $totalTemplates = NewsLetter::all()->count();
        $totalSubscribers = Member::all()->count();

        $latestUsers = User::with('roles')->latest()->take(5)->get();
        $roles = Role::all();

        $latestTemplates = NewsLetter::with('creator')->latest()->take(6)->get();
        return view('admin.dashboard', compact('totalUsers', 'totalTemplates', 'totalSubscribers', 'latestUsers', 'roles', 'latestTemplates'));
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
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
