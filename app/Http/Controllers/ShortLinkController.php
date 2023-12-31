<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;
use Vinkla\Hashids\Facades\Hashids;

class ShortLinkController extends Controller
{
    public function shorten(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $link = ShortLink::create([
            'original_url' => $request->original_url,
        ]);

        // //Generate a random string of length 6 ------------

        // $shortened_url = Str::random(6); //Fine for small scale
        // //Incase of a collision! Generate a new one!
        // while (ShortLink::where('shortened_url', $shortened_url)->exists()) {
        //     $shortened_url = Str::random(6); //random string of length 6
        // }

        //Implement hashids library for large scale
        $shortened_url = Hashids::encode($link->id); //Encode the id 

        $link->update([
            'shortened_url' => $shortened_url,
        ]);


        $fullURL = url('/') . '/' . $link->shortened_url;

        return redirect()->back()
            ->with('shortened_url', $fullURL)
            ->with('id', $link->id);

    }

    public function redirectURL($shortened_url)
    {
        $link = ShortLink::where('shortened_url', $shortened_url)->first(); //

        $link->increment('click_count');

        if (!$link) {
            return response(['message' => 'URL not found', 404]);
        }

        $ip = request()->ip(); //Doesn't work when running on localhost
        // $ip = '66.102.0.0'; //Googlebot IP
        $position = Location::get($ip);
        if ($position && isset($position->countryName)) {

            $link->clicks()->create([
                'ip_address' => $ip,
                'country' => $position->countryName,
                'city' => $position->cityName,
            ]);
        } else {
            $link->clicks()->create([
                'ip_address' => $ip,
                'country' => 'Unknown',
                'city' => 'Unknown',
            ]);
        }

        return redirect($link->original_url);
    }

    public function analytic()
    {
        $links = ShortLink::orderBy('id', 'asc')->paginate(10);

        return view('analytics', compact('links'));
    }

    //For Postman API ----------
    public function shortenAPI(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $link = ShortLink::create([
            'original_url' => $request->original_url,
        ]);

        $shortened_url = Hashids::encode($link->id); //Encode the id

        $link->update([
            'shortened_url' => $shortened_url,
        ]);

        $fullURL = url('/') . '/' . $link->shortened_url;


        return response(['fullURL' => $fullURL], 200); //return json response

    }
}