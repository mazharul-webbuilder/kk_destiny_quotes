<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Resources\QuoteResource;

class ApiController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->paginate(10);

        return QuoteResource::collection($quotes);
    }

    public function create(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'quote' => 'required | min:100',
        ]);

        Quote::create($request->all());

        return response()->json('success');
    }
}
