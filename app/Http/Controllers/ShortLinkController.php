<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortLinkController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $shortened_url = Str::random(6);

        //Incase of a collision! Generate a new one!
        while (ShortLink::where('shortened_url', $shortened_url)->exists()) {
            $shortened_url = Str::random(6); //random string of length 6
        }

        $link = ShortLink::create([
            'original_url' => $request->original_url,
            'shortened_url' => $shortened_url,
        ]);

        $fullURL = url('/') . '/' . $link->shortened_url;

        return redirect()->back()->with('shortened_url', $fullURL);

    }

    public function redirectURL($shortened_url)
    {
        $link = ShortLink::where('shortened_url', $shortened_url)->first(); //

        if (!$link) {
            return response(['message' => 'URL not found', 404]);
        }

        $link->increment('click_count');

        return redirect($link->original_url);
    }

    public function analytic()
    {
        $links = ShortLink::latest()->paginate(10);

        return view('analytics', compact('links'));
    }

}