@extends('layout')

@section('title', 'Quotes List')

@section('content')
<div class="row my-4">
    <div class="col-12">
        <h1 class="text-center">Quotes List</h1>
        <p><a href="quotes/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add New Quote</a></p>
    </div>
</div>
<div class="row">
    @foreach($quotes as $quote)

    <div class="col-md-3 my-3">
        <div class="card">
            <img src="{{ $quote->image }}" alt="" class="card-img-top">
            <div class="card-body">
                <p class="card-text"><strong>Season: </strong>{{ $quote->season }}</p>
                <p class="card-text"><strong>Episode: </strong>{{ $quote->episode }}</p>
                <p class="lead">{{ $quote->quote }}</p>
                <a href="/quotes/{{ $quote->id }}" class="card-link float-right">
                    Details
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="col-2">
        {{ $quote->id }}
</div>
<div class="col-4">
    <a href="/quotes/{{ $quote->id }}">
        {{ $quote->quote }}
    </a>
</div>
<div class="col-4">
    {{ $quote->season }}
</div>
<div class="col-2">
    {{ $quote->episode }}
</div>
</div>
<div class="row">
    <div class="col-6 col-offset-3">
        <img src="{{ $quote->image }}" alt="">
    </div> --}}
    @endforeach
</div>

@endsection
