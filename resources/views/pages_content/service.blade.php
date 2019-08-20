<section id="main_section" style="background-image: url('{{ asset('/img/services') . '/' . $service->service_image . '_bright.jpg' }}')">
    <div id="main_section_content" class="bg_main_black">
        <h3 class="main_white">{{ $service->service_name }}</h3>
        <p class="white_blue">{{ $service->service_desc }}</p>
        <a href="/contacts" class="secondary_button main_white">Заказать</a>
    </div>
</section>
