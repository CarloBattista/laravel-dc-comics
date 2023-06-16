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
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="field_text" name="title" max="100" value="{{$comic->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="floatingTextarea2" name="description" style="height: 200px">{{$comic->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">URL Thumb</label>
            <input type="text" class="form-control" id="field_text" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="field_text" name="price" value="{{$comic->price}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="field_text" name="series" value="{{$comic->series}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="field_text" name="sale_date" value="{{$comic->sale_date}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="field_text" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="field_text" name="type" value="{{$comic->type}}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit Comic</button>
    </form>
</div>

@endsection