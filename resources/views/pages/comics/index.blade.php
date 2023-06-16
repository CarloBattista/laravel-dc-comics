@foreach ($comics as $elem)
    <div class="cardSeries">
        <a href="{{ route('show', $elem) }}">
            <div class="imgWrap">
                <img class="img_series" src="{{ $elem->thumb }}" alt="{{ $elem->title }}">
            </div>
            <div class="infoWrap">
                <p class="info_content title_series">{{ $elem->title }}</p>
                <p class="info_content price_series">{{ $elem->price }}</p>
                <p class="info_content sale_series">{{ $elem->sale_date }}</p>
            </div>
        </a>
        {{-- <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            @csrf
            @method('DELETE')
    
            <button type="button" class="btn btn-danger mt-2">Delete</button>
        </form> --}}
    </div>
@endforeach