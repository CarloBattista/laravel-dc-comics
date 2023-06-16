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
            <input type="text" class="form-control" id="field_text" name="title" max="100" required>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Description</label>
            <input type="text" class="form-control" id="field_text" name="description" required>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">URL Thumb</label>
            <input type="text" class="form-control" id="field_text" name="thumb">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Price</label>
            <input type="text" class="form-control" id="field_text" name="price" required>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Series</label>
            <input type="text" class="form-control" id="field_text" name="series" required>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="field_text" name="sale_date" required>
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Type</label>
            <input type="text" class="form-control" id="field_text" name="type" required>
        </div>

        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>
</div>

@endsection