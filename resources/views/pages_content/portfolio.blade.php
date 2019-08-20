<section class="owl-carousel owl-loaded" id="main_section">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            @foreach($portfolio as $k => $work)
                <div class="owl-item animated" style="background-image: url('{{ asset('/img/portfolio') . '/' . $work->portfolio_main_image . '_mono.jpg'}}')">
                    <div class="portfolio_slide_content_wrapper bg_main_black">
                        <h3 class="main_white">Наименование {{ $work->portfolio_name }}</h3>
                        <h5 class="main_white">Категория проекта: {{ $work->portfolio_category }}</h5>
                        <p class="white_blue">Краткое описание: {{ $work->portfolio_small_desc }}</p>
                        <a href="/portfolio/{{ $work->portfolio_alias }}" class="secondary_button main_white" title="Подробнее о проекте: {{ $work->portfolio_name }}">Подробнее</a>
                    </div>
                    <a href="/portfolio/{{ $work->portfolio_alias }}" class="small_color_image" style="background-image: url('{{ asset("/img/portfolio") . "/" .  $work->portfolio_main_image . ".jpg"}}')" title="Подробнее о проекте: {{ $work->portfolio_name }}"></a>
                </div>
            @endforeach
        </div>
    </div>
</section>
