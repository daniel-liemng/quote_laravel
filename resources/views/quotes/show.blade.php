@extends('layout')

@section('title', 'Quote Details')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Quote Details</h1>

    </div>
</div>

<div class="row">
    <div class="col-12">
        <img src="{{ $quote->image }}" alt="">
        <p><strong>Season:</strong> {{ $quote->season }}</p>
        <p><strong>Episode:</strong> {{ $quote->episode }}</p>
        <p><strong>Quote:</strong> {{ $quote->quote }}</p>

    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="/quotes/{{ $quote->id }}/edit" class="btn btn-warning my-3">Edit quote</a>
        {{-- DELETE --}}
        <form action="/quotes/{{ $quote->id }}" method="POST" class="mb-3">
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger my-3">Delete</button>
        </form>
    </div>
</div>



@endsection
