@extends( 'layout.app' )

@section('titlePage')
    Laravel-Comics | Create
@endsection

@section( 'content' )

<div class="container">
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="field_text" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="field_text" name="title" max="100">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="field_text" name="description" required>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">URL Thumb</label>
            <input type="text" class="form-control" id="field_text" name="thumb">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="field_text" name="price" required>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="field_text" name="series" required>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="field_text" name="sale_date" required>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="field_text" name="type" required>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>
</div>

@endsection