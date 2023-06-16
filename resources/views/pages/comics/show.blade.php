@extends( 'layout.app' )

@section('titlePage')
    Laravel-Comics | {{ $comic->title }}
@endsection

@section( 'content' )

<div class="container_dynamic mb-5 mt-5 d-flex flex-column align-items-center justify-content-center">
    <div class="imgWrap">
        <img class="img_series" src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="height: 400px">
    </div>
    <div class="infoWrap mt-2">
        <p class="info_content title_series">{{ $comic->title }}</p>
        <p class="info_content price_series">&euro;{{ $comic->price }}</p>
        <p class="info_content sale_series">{{ $comic->sale_date }}</p>
    </div>
    <div class="extra_function mt-3 d-flex">
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary">Modifica</a>
        <button type="button" class="btn btn-danger ms-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi davvero eliminare il Comic?</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex">
                    <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                    <button type="button" class="btn btn-secondary ms-3" data-bs-dismiss="modal">Annulla</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection