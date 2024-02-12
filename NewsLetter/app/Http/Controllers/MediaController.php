<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('redacteur.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $user = Auth::id();

        $media = Medias::create([
            "user_id" => $user
        ]);

        $media->addMediaFromRequest('image')
            ->toMediaCollection();

        return back()->with('success', 'Files uploaded successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $medias = Medias::all();
        return view('redacteur.media', compact('medias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the media by its ID
        $media = Medias::find($id);

        if (!$media) {
            return redirect()->back()->with('error', 'Media not found.');
        }
        $media->delete();

        return redirect()->back()->with('success', 'Media deleted successfully.');
    }
}
