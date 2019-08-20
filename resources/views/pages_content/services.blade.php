<section id="main_section" class="bg_main_black">
    @foreach($services as $k => $service)
        <div class="service_block" id="{{ $service->service_image }}">
            <h3 class="main_white">{{ $service->service_name }}</h3>
            <p class="white_blue">{{ $service->service_small_desc }}</p>
            <a href="/services/{{ $service->service_alias }}" class="secondary_button main_white">Подробнее</a>
        </div>
    @endforeach
</section>
