@extends( 'layout.app' )

@section('titlePage')
    Laravel-Comics | Show
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
</div>

@endsection