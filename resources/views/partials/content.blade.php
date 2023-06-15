<!-- Container content -->
<div class="container__content">
    <div class="inner_content">
        <div class="container_heading">
            <h2 class="heading_content">Current Series</h2>
        </div>
        <div class="container_series">
            @foreach ($comics as $elem)
                <div class="cardSeries">
                    <a href="/">
                        <div class="imgWrap">
                            <img class="img_series" src="{{ $elem->thumb }}" alt="">
                        </div>
                        <div class="infoWrap">
                            <p class="info_content title_series">{{ $elem->title }}</p>
                            <p class="info_content price_series">{{ $elem->price }}</p>
                            <p class="info_content sale_series">{{ $elem->sale_date }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="container_cta">
            <button type="button" class="btn_load_more inverted_btn">Load More</button>
        </div>
    </div>
</div>