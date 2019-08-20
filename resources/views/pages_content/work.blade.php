<section id="main_section" class="bg_main_black">
    <div id="filter" style="background-image: url('{{ asset('/img/portfolio') . '/' . $work->portfolio_main_image . '_mono.jpg' }}')"></div>
    <div id="main_section_content">
        <div id="main_section_text" class="bg_main_black">
            <h3 class="main_white">Проект: {{ $work->portfolio_name }}</h3>
            <h5 class="white_blue">Категория: {{ $work->portfolio_category }}</h5>
            <p class="main_white">Описание:<br>{{ $work->portfolio_desc }}</p>
            <div id="button_wrapper">
                <a href="/portfolio/{{ $prev_work_alias }}" class="secondary_button main_white">Предыдущий</a>
                <a href="/contacts" class="secondary_button main_white">Контакты</a>
                <a href="/portfolio/{{ $next_work_alias }}" class="secondary_button main_white">Следующий</a>
            </div>
        </div>
        <div id="main_section_img" style="background-image: url('{{ asset('/img/portfolio') . '/' . $work->portfolio_main_image . '.jpg' }}')"></div>
    </div>
</section>
