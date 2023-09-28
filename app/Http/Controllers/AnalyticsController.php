<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function show($id)
    {
        $shortLink = ShortLink::findOrFail($id);
        $clicks = $shortLink->clicks()->orderBy('created_at', 'desc')->get();
        return view('analytics.show', compact('shortLink', 'clicks'));
    }
}