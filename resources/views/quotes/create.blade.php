@extends('layout')

@section('title', 'Add New Quote')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Add New Quote</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="/quotes" method="POST" class="mb-3">

            @include('quotes.form')

            <button type="submit" class="btn btn-block btn-primary mt-4">Add Quote</button>

        </form>
    </div>
</div>

@endsection
