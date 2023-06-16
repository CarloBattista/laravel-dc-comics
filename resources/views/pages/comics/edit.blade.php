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
            <input type="text" class="form-control" id="field_text" name="title" max="100" required value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2" class="form-label">Descrizione</label>
            <textarea class="form-control" id="floatingTextarea2" name="description" style="height: 200px" required>{{$comic->description}}</textarea>
          </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">URL Thumb</label>
            <input type="text" class="form-control" id="field_text" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Price</label>
            <input type="text" class="form-control" id="field_text" name="price" required value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Series</label>
            <input type="text" class="form-control" id="field_text" name="series" required value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Sale Date</label>
            <input type="date" class="form-control" id="field_text" name="sale_date" required value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Type</label>
            <input type="text" class="form-control" id="field_text" name="type" required value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-primary">Edit Comic</button>
    </form>
</div>

@endsection