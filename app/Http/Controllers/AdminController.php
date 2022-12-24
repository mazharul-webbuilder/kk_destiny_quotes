<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $quotes = Quote::with('author')->paginate(10);

        $authors = User::all();


        return view('admin.home', compact('quotes', 'authors'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'quote' => 'required | min:100',
        ]);

        Quote::create($request->all());

        return redirect()->back();
    }

    public function edit($id)
    {
        $quote = Quote::find($id);

        $authors = User::all();

        return view('admin.quote.edit', compact('authors', 'quote'));

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'author_id' => 'required',
            'quote' => 'required|min:50',
        ]);

        $quote = Quote::find($id);

        $quote->author_id = $request->author_id;
        $quote->quote = $request->quote;
        $quote->save();

        return redirect('admin/settings');
    }

    public function destroy($id)
    {
        $quote = Quote::find($id);

        $quote->delete($id);

        return redirect()->back();
    }


}
