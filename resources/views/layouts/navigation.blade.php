<header id="main_header">
    <a href="/" id="main_header_logo" title="На главную страницу">
        <div></div>
        <h1 id="header_h1" class="main_white">Альфа</h1>
    </a>
    <div id="main_header_link_container">
        @foreach($links as $k => $link)
            <a href="/{{ $link->page_alias }}" class="main_white">{{ $link->page_name }}</a>
        @endforeach
    </div>
</header>
