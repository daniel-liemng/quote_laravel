<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index() {
        $quotes = Quote::all();
        return view('quotes.index', compact('quotes'));
    }

    public function create() {
        $quote = new Quote();
        return view('quotes.create', compact('quote'));
    }

    public function store() {
        Quote::create($this->validateRequest());
        return redirect('quotes');
    }

    public function show(Quote $quote) {
        return view('quotes.show', compact('quote'));
    }

    public function edit(Quote $quote) {
        return view('quotes.edit', compact('quote'));
    }

    public function update(Quote $quote) {
        $quote->update($this->validateRequest());
        return redirect('quotes/' . $quote->id);
    }

    public function destroy(Quote $quote) {
        $quote->delete();
        return redirect('quotes');
    }

    public function validateRequest() {
        return request()->validate([
            'season' => 'required',
            'episode' => 'required',
            'quote' => 'required',
            'image' => 'required'
        ]);
    }
}
