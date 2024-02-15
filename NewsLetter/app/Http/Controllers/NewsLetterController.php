<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
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

    /////////************************************************///////////////
    ///                         Templates
    /// ////////////////////////////////////////////////////////////////////

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::id();
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data['creator'] = $user;

        NewsLetter::create($data);

        return redirect('templates');
    }

    public function showTemplate(){
        $templates = NewsLetter::all();

        return view('redacteur.templates', compact('templates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function editTemplate($id)
    {
        $template = NewsLetter::find($id);

        return view('redacteur.updateTemplate', compact('template'));
    }


    public function updateTemplate(Request $request, $id)
    {
        $user = Auth::id();
        $template = NewsLetter::findOrFail($id); // Utilisez findOrFail pour gérer les cas où l'ID n'existe pas

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $template->title = $data['title'];
        $template->content = $data['content'];
        $template->creator = $user;

        $template->save();

        return redirect('templates')->with('success', 'Template updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\NewsLetter $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function deleteTemplate($id)
    {
        $templateId = NewsLetter::find($id);

        $templateId->delete();

        return redirect('templates');
    }
}
