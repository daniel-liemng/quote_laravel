<div class="form-group">
    <label for="season">Season</label>
    <input type="text" name="season" id="season" class="form-control" value="{{ old('season') ?? $quote->season}}">
    <div class="text-danger">{{ $errors -> first('season') }}</div>
</div>

<div class="form-group">
    <label for="episode">Episode</label>
    <input type="text" name="episode" id="episode" class="form-control" value="{{ old('episode') ?? $quote->episode }}">
    <div class="text-danger">{{ $errors -> first('episode') }}</div>
</div>

<div class="form-group">
    <label for="quote">Quote</label>
    <textarea name="quote" id="quote" class="form-control" rows="5">{{ old('quote') ?? $quote->quote }}</textarea>
    <div class="text-danger">{{ $errors -> first('quote') }}</div>
</div>

<div class="form-group">
    <label for="quote">Image</label>
    <p class="text-muted">https://picsum.photos/id/XXX/300/200</p>
    <input type="text" name="image" id="image" class="form-control" value="{{ old('image') ?? $quote->image }}">
    <div class="text-danger">{{ $errors -> first('image') }}</div>
</div>

@csrf
