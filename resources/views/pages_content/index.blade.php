<section id="main_section">
    <div id="main_section_wrapper">
        <h1 class="main_white"></h1>
        <h2 class="main_white">Проектирование и сопровождение проектов любой сложности: от жилого дома до огромного завода</h2>
        <a href="/services" class="main_button main_white">Наши услуги</a>
    </div>
</section>
<section id="main_services_links_container" class="bg_medium_black">
    @foreach($services as $k => $service)
        <a href="/services/{{ $service->service_alias }}" title="{{ $service->service_small_desc }}" class="main_white">{{ $service->service_name }}</a>
    @endforeach
</section>
