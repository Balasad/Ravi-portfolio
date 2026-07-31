<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        // Static submission response
        return response()->json([
            'success' => true,
            'message' => 'REEL SUBMISSION RECEIVED -- Playhead marker set. We will contact you within 24 hours.'
        ]);
    }
}
