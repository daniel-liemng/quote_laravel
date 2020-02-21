@extends('layout')

@section('title', 'Edit Quote')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Edit Quote</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="/quotes/{{ $quote->id }}" method="POST" class="mb-3">
            @method('PATCH')

            @include('quotes.form')

            <button type="submit" class="btn btn-block btn-primary mt-4">Save Quote</button>

        </form>
    </div>
</div>

@endsection
