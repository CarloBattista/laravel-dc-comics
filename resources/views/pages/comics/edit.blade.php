@extends( 'layout.app' )

@section('titlePage')
    Laravel-Comics | Edit
@endsection

@section( 'content' )

<div class="container">
    <form action="{{ route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="field_text" class="form-label">Title</label>
            <input type="text" class="form-control" id="field_text" name="title" max="100" value="{{ old('title') ?? $comic->title }}>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Description</label>
            <input type="text" class="form-control" id="field_text" name="description">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">URL Thumb</label>
            <input type="text" class="form-control" id="field_text" name="thumb">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Price</label>
            <input type="text" class="form-control" id="field_text" name="price">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Series</label>
            <input type="text" class="form-control" id="field_text" name="series">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="field_text" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Type</label>
            <input type="text" class="form-control" id="field_text" name="type">
        </div>

        <button type="submit" class="btn btn-primary">Edit Comic</button>
    </form>
</div>

@endsection