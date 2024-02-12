<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Support\Facades\Route;

use App\Events\UserSubscribed;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:members,email'
        ]);

        event(new UserSubscribed($request->input('email')));
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $subscribers = Member::where('status', '=', 'subscribed')->paginate(5);
        $unsubscribers = Member::where('status', '=', 'unsubscribed')->paginate(5);
//        $unsubscribers = Member::paginate(8);

//        $subscribers = Member::paginate(8);
        return view('admin.subscribers', compact('subscribers', 'unsubscribers'));

    }

    public function showS()
    {
        $subscribers = Member::where('status', '=', 'subscribed')->paginate(5);
        $unsubscribers = Member::where('status', '=', 'unsubscribed')->paginate(5);

        return view('redacteur.subscribers', compact('subscribers', 'unsubscribers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
