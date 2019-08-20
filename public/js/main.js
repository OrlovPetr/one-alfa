window.addEventListener('DOMContentLoaded', function () {
    'use strict';

    let mainHeaderLinks = document.querySelectorAll('#main_header_link_container a'),
        aLink = document.querySelectorAll('a'),
        loader = document.querySelector('#loader');

    for (let i = 0; i < mainHeaderLinks.length; i++) {
        if (mainHeaderLinks[i].getAttribute('href') === window.location['pathname']) {
            mainHeaderLinks[i].style.borderColor = "#afaff5";
            mainHeaderLinks[i].style.color = "#afaff5";
        }
    }

for (let i = 0; i < aLink.length; i++) {
    aLink[i].addEventListener('click', function (event) {
        event.preventDefault();

        let link = aLink[i].getAttribute('href');

        loader.style.display = "flex";
        loader.classList.remove('fadeOut');
        loader.classList.add('fadeIn');

        window.location.replace(link);
    });
}
});
