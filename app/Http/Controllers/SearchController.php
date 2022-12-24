<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'searchpattern' => ['required']
        ]);

        $quotes = Quote::where('quote', 'LIKE', "%test%")->paginate(5);

        return view('front.home', compact('quotes'));
    }
}
